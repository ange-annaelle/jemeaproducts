<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use \App\Models\Picture;
use \App\Models\SubCategory;
use Intervention\Image\Laravel\Facades\Image;
use \App\Models\Category;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Products';
        $products = Product::paginate(50);
        return view('dna.product.index',
            compact(
                'title','products'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Add product';
        $categories = \App\Models\Category::all();
        $subcategories = \App\Models\SubCategory::all();
        return view('dna.product.create',
            compact(
                'title','categories','subcategories'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $uploadDirectoy = public_path() . '/images/product/';

        $validated = $request->validate([

            'name' => 'required',
            // 'price' => 'numeric',
            'sub_category_id' => 'required',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,jpg|max:1024',
            'short_description' => 'required',
            'long_description' => 'required'
        ]);

        $category = SubCategory::find($request->input('sub_category_id'))->category;


        $product = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'short_description' => $request->input('short_description'),
            'long_description' => $request->input('long_description'),
            'category_id' => $category->id,
            'sub_category_id' => $request->input('sub_category_id'),

            // 'image' => $imageName . "." . $request->file('image')->getClientOriginalExtension(),
        ]);

        foreach ($request->file('images') as $index => $image) {

            $fileName = time() . "_" . uniqid(8) . "." . $image->getClientOriginalExtension();

                Image::read($image
                ->move($uploadDirectoy, $fileName))
            ->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })
            // ->insert(public_path() . '/watermark.png', 'center')
            ->save();

            $picture = new Picture();
            $picture->picture = $fileName;
            $picture->product_id = $product->id;
            $picture->name = $product->slug." Image ".$index+1 ;
            $picture->save();
        }

        return redirect()->to('dna/products')->with('success', 'Product was added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = 'Add subcategory';
        $categories = \App\Models\Category::all();
        $subcategories = \App\Models\SubCategory::all();
        $product = \App\Models\Product::find($id);

        return view('dna.product.edit',
            compact(
                'title','categories','subcategories','product'
            )
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //
        $title = 'Editing product';
        $categories = \App\Models\Category::all();
        $subcategories = \App\Models\SubCategory::all();
        $product = \App\Models\Product::find($id);

        return view('dna.product.edit',
            compact(
                'title','categories','subcategories','product'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // return $request->all();

        $uploadDirectoy = public_path() . '/images/product/';

        $product = \App\Models\Product::find($id);

        $validated = $request->validate([

            'name' => 'required',
            'price' => 'numeric',
            'sub_category_id' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,jpg|max:1024',
            'short_description' => 'required',
            'long_description' => 'required'
        ]);

        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'short_description' => $request->input('short_description'),
            'long_description' => $request->input('long_description'),
            'sub_category_id' => $request->input('sub_category_id'),
        ]);

        if($request->has('images') ) {
            foreach ($request->file('images') as $index => $image) {

            $fileName = time() . "_" . uniqid(8) . "." . $image->getClientOriginalExtension();

                Image::read($image
                ->move($uploadDirectoy, $fileName))
            ->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })
            // ->insert(public_path() . '/watermark.png', 'center')
            ->save();

            $picture = new Picture();
            $picture->picture = $fileName;
            $picture->product_id = $product->id;
            $picture->name = $product->slug." Image ".$index+1 ;
            $picture->save();
        }
        }
        return redirect()->back()->with('success', 'Product was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()->to('dna/products')->with('success', 'Product was successfully deleted with all images');
    }
}
