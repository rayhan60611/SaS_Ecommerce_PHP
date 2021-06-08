<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class AdminProductController extends Controller
{


    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required | max:150',
            'price' => 'required | numeric',
            'quantity' => 'required | numeric',
            'description' => 'required',
            'brand_id' =>'required',
            'category_id' =>'required',
            //'product_image' => 'nullable|required|image',
           ]);

        $product = new Product;

        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;

        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->slug = str::slug($request->title);
        $product->status = 1;
        if($request->has('status')){
            $product->status = 1;
        }else{
            $product->status = 0;
        }
        $product->offer_price = $request->offer_price;
        $product->admin_id = 1;
        $product->save();

        // productImage model a data insert
        // if($request->hasFile('product_image')){
        
        //     $image = $request->file('product_image');
        //     $img = time() . '.' .$image->getClientOriginalExtension();
        //     $location = public_path('images/products/' . $img);
        //     Image::make($image)->save($location);

        //     // new object for Product image model 
        //     $product_image = new ProductImage;
        //     $product_image->product_id = $product->id;
        //     $product_image->image = $img;
        //     $product_image->save();


        // }

        $randomImageString = Str::random(30);
        if(count($request->product_image) > 0){
            foreach ($request->product_image as $image ) {

                $img = time().$request->title.$randomImageString. '.' .$image->getClientOriginalExtension();
                $location = public_path('images/products/' . $img);
                Image::make($image)->save($location);

                // new object for Product image model 
                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();

            }
        }

        session()->flash('success', 'Product has been Added Successfully!');
        return redirect()->route('admin.products');
    }


    public function show(Request $request){

        //$products = Product::orderBy('id','desc')->get();
       // $productImage = ProductImage::where($product->id , '=' , $ProductImage->product_id)->get()
        // $products = Product::orderBy('id','desc')->join('product_images', 'products.id', '=', 'product_images.product_id')
        //       ->get(['products.*', 'product_images.image']);

        $products = Product::leftjoin('product_images', 'products.id', '=', 'product_images.product_id')
               ->get(['products.*', 'product_images.image']);
        $productsCount = Product::orderBy('id','desc')->get()->count();;
        return view('admin.productShow' ,  compact('products','productsCount'));
      // return view('admin.productShow', compact('product'));
    }


    public function edit($id){

        $product = Product::find($id);
        $product_image = ProductImage::orderBy('id' ,'desc')->where('product_id' , $product->id)->get();
        return view('admin.productEdit',compact('product' , 'product_image'));
    }

    public function update(Request $request, $id ){

        $request->validate([
            'title' => 'required | max:150',
            'price' => 'required | numeric',
            'quantity' => 'required | numeric',
            'description' => 'required',
            'brand_id' =>'required',
            'category_id' =>'required',
            //'product_image' => 'Nullable|image',
        ]);

        $product = Product::find($id);

        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;

        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->slug = str::slug($request->title);
        $product->status = 1;
        if($request->has('status')){
            $product->status = 1;
        }else{
            $product->status = 0;
        }
        $product->offer_price = $request->offer_price;
        $product->admin_id = 1;
        $product->save();

        
        if(!is_null($request->product_image)){
            $product_image = ProductImage::orderBy('id' ,'desc')->where('product_id' , $product->id)->get();
            foreach ($product_image as $sub) {
                if(File::exists('images/products/'. $sub->image)){
                File::delete('images/products/'. $sub->image);
                }
                $sub->delete();
            }
    

        $randomImageString = Str::random(30);
        if(count($request->product_image) > 0){
            foreach ($request->product_image as $image ) {

                $img = time().$request->title.$randomImageString. '.' .$image->getClientOriginalExtension();
                $location = public_path('images/products/' . $img);
                Image::make($image)->save($location);

                // new object for Product image model 
                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();

            }
        }
    }

        session()->flash('success', 'Product has been Updated Successfully!');
        return redirect()->route('admin.products');


    }


    public function delete($id){

    $product = Product::find($id);
    if(!is_null($product)){
        $product_image = ProductImage::orderBy('id' ,'desc')->where('product_id' , $product->id)->get();
            foreach ($product_image as $sub) {
                if(File::exists('images/products/'. $sub->image)){
                File::delete('images/products/'. $sub->image);
                }
                $sub->delete();
            }
        $product->delete();
    }
    session()->flash('success', 'Product has been Deleted Successfully!');
    return back();

    }

}