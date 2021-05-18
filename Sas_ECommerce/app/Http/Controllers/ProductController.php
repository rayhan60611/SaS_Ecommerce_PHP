<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productsController(){
        $products = Product::orderBy('id','desc')->get();
        return view ('product')->with('product' , $products);
    }
}