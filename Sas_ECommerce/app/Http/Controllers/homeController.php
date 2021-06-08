<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class homeController extends Controller
{
    public function homePage(){
        $products = Product::orderBy('id','desc')->paginate(10);
        return view('home' , compact('products'));
    }
}
