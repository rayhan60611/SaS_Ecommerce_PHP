<?php

namespace App\Http\Controllers;

// use App\Models\Product;
// use App\Models\ProductImage;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;
// use Image;

class AdminPagesController extends Controller
{
    public function index(){
        return view('admin.index');
    }
       

}