<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('cart/add', 'App\Http\Controllers\CartController@add');
Route::get('cart/update', 'App\Http\Controllers\CartController@update');
Route::get('cart/remove', 'App\Http\Controllers\CartController@remove');
Route::get('cart/empty', 'App\Http\Controllers\CartController@empty');
Route::get('delete-product-image/{id}', function($id) {
    $picture = \App\Models\Picture::find($id);
    if($picture->product->pictures()->count() > 1) {
        $picture->delete();
    }
    return redirect()->back()->with('success', "Image was deleted");
});

Route::get('placing-order', function() {

    $c = "";
    foreach(\Cart::content() as $carted) {
        $c .= "- ".$carted->name." - ".$carted->price." x ".$carted->qty." = ".($carted->price*$carted->qty)."\n";
    }

    $message = "Hi, je voudrais valider ma commande Jemea 🙏\n\n";
    $message .= "JEMEA PRODUCTS - Commande Web/WhatsApp\n";
    $message .= "- - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    $message .= "Date : ".date('d/m/Y')."\n";
    $message .= "Heure : ".date('H:i')."\n";
    $message .= "- - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    $message .= $c;
    $message .= "- - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    $message .= "Logistique : 1500 FCFA\n";
    $message .= "Total : ".\Cart::total()." FCFA\n";
    $message .= "- - - - - - - - - - - - - - - - - - - - - - - - - - -";

    return redirect()->away('https://api.whatsapp.com/send/?phone=237694994229&text='.rawurlencode($message).'&type=phone_number&app_absent=0');
});

Auth::routes();

Route::any('register', function(){
    return redirect()->to('login')->with('error', 'Registration not allowed!');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('dna/categories', App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::resource('dna/subcategories', App\Http\Controllers\SubCategoryController::class)->middleware('auth');
Route::resource('dna/products', App\Http\Controllers\ProductController::class)->middleware('auth');

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get("/", function(){
        $data['title'] = 'Home';
        $data['categories'] = \App\Models\Subcategory::all();
        return view('jemea.home')->with($data);
    });

    Route::get("/fidelity", function(){
        $data['title'] = 'Ma Fidélité';
        $data['categories'] = \App\Models\Subcategory::all();
        return view('jemea.fidelity')->with($data);
    });

    Route::get("/contact", function(){
        $data['title'] = 'Contact';
        $data['categories'] = \App\Models\Subcategory::all();
        return view('jemea.contact')->with($data);
    });

    Route::get("/about", function(){
        $data['title'] = 'About';
        $data['categories'] = \App\Models\Subcategory::all();
        return view('jemea.about')->with($data);
    });

    // Route pour la page de description des produits
    Route::get("/description-produit", [ProductController::class, 'description'])->name('description.produit');

    Route::get("/product-category/{slug}", function($slug){
        $data['title'] = 'Product category';
        $data['categories'] = \App\Models\Subcategory::all();
        $data['category'] = \App\Models\Subcategory::where('slug','=',$slug)->first();
        $data['title'] = $data['category']->name;
        return view('jemea.products')->with($data);
    });
    
    Route::get("/product-search", function(\Illuminate\Http\Request $request){
        $data['categories'] = \App\Models\Subcategory::all();

        $q = $request->input('q');
        $data['title'] = trans('ws.search_for')." ".$q;
        $data['products'] = \App\Models\Product::where('name', 'like' ,'%'.$q.'%')
            ->orWhereHas('subcategory', function($query) use ($q) {
                $query->where('name', 'like', '%'.$q.'%');
            })
            ->orWhereHas('category', function($query) use ($q) {
                $query->where('name', 'like', '%'.$q.'%');
            })
            ->get();
        return view('jemea.search')->with($data);
    });

    Route::get("/product/{slug}", function($slug){
        $data['title'] = 'Product category';
        $data['product'] = \App\Models\Product::where('slug','=',$slug)->first();
        $data['title'] = $data['product']->name;
        return view('jemea.product')->with($data);
    });

});