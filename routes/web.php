<?php

use Illuminate\Support\Facades\Route;

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
        $c = $c . " - ".$carted->name . " - ". $carted->price ." x ".$carted->qty." = ". $carted->price*$carted->qty." ";
    }


    $txt = "𝐉𝐄𝐌𝐄𝐀 𝐏𝐑𝐎𝐃𝐔𝐂𝐓𝐒 𝐖𝐞𝐛/𝐖𝐡𝐚𝐭𝐬𝐀𝐩𝐩 𝐎𝐫𝐝𝐞𝐫⁣
 ⁠- - - - - - - - - - - - - - - - - - - - - - - -  ⁣
𝘖𝘳𝘥𝘦𝘳 𝘋𝘦𝘵𝘢𝘪𝘭𝘴 ⁣
𝘋𝘢𝘵𝘦 : 25 January 2025⁣
𝘛𝘪𝘮𝘦 : 22:50 H⁣
- - - - - - - - - - - - - - - - - - - - - - - - -⁣
•⁠  ". $c ."
 - - - - - - - - - - - - - - - - - - - - - - - - -⁣
𝘓𝘰𝘨𝘪𝘴𝘵𝘪𝘤𝘴 : 1500 ⁣
𝘛𝘰𝘵𝘢𝘭 : ".\Cart::total()."
 - - - - - - - - - - - - - - - - - - - - - - - - -";
// return $c;
    $text = "
JEMEA PRODUCTS Web/WhatsApp Order
⁠- - - - - - - - - - - - - - - - - - - - - - - - - - - <br/>
Order Details<br/>
Date :".date('Y/m/d')."<br/>
Time : ".date('H:i:s')."<br/>
- - - - - - - - - - - - - - - - - - - - - - - - - - -<br/>
". $c ."
- - - - - - - - - - - - - - - - - - - - - - - - - - -<br/>
Logistics : 1500
Total : ".\Cart::total()." FCFA
- - - - - - - - - - - - - - - - - - - - - - - - - - -";

// return $text;
    // return redirect()->to('https://wa.me/237695286829?text=hahr asg as');
     return redirect()->away('https://api.whatsapp.com/send/?phone=237695286829&txt='.str_replace(array("\r\n", "\n", "\r"), '', $text).'&type=phone_number&app_absent=0');
     return 0;
    // return redirect()->away('https://wa.me/237695286829?text=hahr asg as');
    // return redirect()->back()->with('success', "Image was deleted");
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

    Route::get("/product-category/{slug}", function($slug){
        $data['title'] = 'Product category';
        $data['categories'] = \App\Models\Subcategory::all();
        $data['category'] = \App\Models\Subcategory::where('slug','=',$slug)->first();
        $data['title'] = $data['category']->name;
        return view('jemea.products')->with($data);
    });
    
    Route::get("/product-search", function(\Illuminate\Http\Request $request){
        $data['categories'] = \App\Models\Subcategory::all();
        
        $data['title'] = trans('ws.search_for')." ".$request->input('q');
        $data['products'] = \App\Models\Product::where('name', 'like' ,'%'.$request->input('q').'%')->get();
        return view('jemea.search')->with($data);
    });

    Route::get("/product/{slug}", function($slug){
        $data['title'] = 'Product category';
        $data['product'] = \App\Models\Product::where('slug','=',$slug)->first();
        $data['title'] = $data['product']->name;
        return view('jemea.product')->with($data);
    });

});
