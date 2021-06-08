<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function productSearch(Request $request){
        $search = $request->search;
        $products = Product::orWhere('title' , 'like' ,'%'.$search.'%')
        ->orWhere('description' , 'like' ,'%'.$search.'%')
        ->orWhere('price' , 'like' ,'%'.$search.'%')
        ->orWhere('quantity' , 'like' ,'%'.$search.'%')
        ->orderBy('id' , 'desc')
        ->paginate(10);

        $SearchCound = count($products);

        return view( 'searchShow', compact('search' ,'products' ,'SearchCound'));

   }


   public function categoryShow($slug){

      $category = Category::find($slug);
      if(!is_null($category)){
         return view ('ProductCategoriesShow' , compact('category'));
      }
      else{
         session()->flash('error' , 'Sorry !!! there is no Category Available By this Name');
         // return redirect('/');
         return $category->name;
      }
   }
}
