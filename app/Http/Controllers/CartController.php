<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function add(\Illuminate\Http\Request $request) {
        $item = \App\Models\Product::find($request->input('product'));
        \Cart::add($item, $request->input('quantity'), $options = ['link' => url('product/'.$item->slug), 'image' => url('images/product')."/".$item->pictures()->first()->picture ] );
        return redirect()->back();
    }

    public function remove(\Illuminate\Http\Request $request) {
        Cart::remove($request->input('id'));
        return redirect()->back();
    }

    public function update(\Illuminate\Http\Request $request) {

        \Cart::update($request->input('id'), $request->input('quantity'));
        return redirect()->back();
    }

     public function empty() {
        \Cart::destroy();
        return redirect()->back();
    }
}
