<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProduct(){
        $products = Product::orderBy('id','desc')->paginate(10);
        return view ('product')->with('products' , $products);
    }

    public function show($slug){
        $products = Product::where('slug' , $slug)->first();
        if(!is_null($products)){
            return view('show' , compact('products'));
        }
        else{
            session()->flash('errors' , 'Sorry !! There is No Product by this Name');
            return redirect()->route('products');
        }
       
    }


}