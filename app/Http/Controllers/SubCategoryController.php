<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SubCategory;
use Intervention\Image\Laravel\Facades\Image;
use \App\Models\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Subcategories';
        $subcategories = Subcategory::paginate(16);
        return view('dna.subcategory.index', 
            compact(
                'title','subcategories'
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
        $title = 'Add subcategory';
        $categories = \App\Models\Category::all();
        return view('dna.subcategory.create', 
            compact(
                'title','categories'
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
        $uploadDirectoy = public_path() . '/images/subcategory/';
        $validated = $request->validate([

            'name' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,jpeg,gif,png|max:500',
            'about' => 'required'
        ]);

        $imageName = time();
        Image::read($request
                ->file('image')
                ->move($uploadDirectoy, $imageName . "." . $request->file('image')->getClientOriginalExtension()))
            ->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save();
            $imageName . "." . $request->file('image')->getClientOriginalExtension();

        
            $subcategory = SubCategory::create([
                'name' => $request->input('name'),
                'category_id' => $request->input('category_id'),
                'image' => $imageName . "." . $request->file('image')->getClientOriginalExtension(),
                'about' => $request->input('about'),
            ]);

            return redirect()->to('dna/subcategories')->with('success', 'Subcategory added');
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
    }
}
