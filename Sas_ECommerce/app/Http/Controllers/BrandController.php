<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class BrandController extends Controller
{

    public function showBrand(){

        $brands = Brand::orderBy('id' ,'desc')->get();
         return view ('admin.showBrand' , compact('brands'));
     }

     
     public function addBrand(){

        return view ('admin.addBrand');
    }

    public function addBrandStore(Request $request ){

            $this->validate($request, [
            'name' => 'required',
            'brand_image' => 'nullable|image',

     ]);


        $brand = new Brand;
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->slug = str::slug($request->name);
        //$brand->parent_id = $request->parent_id;
        // image insert
        $randomImageString = Str::random(30);
        if($request->hasFile('brand_image')){
   
            $image = $request->file('brand_image');
            $img = time() .$randomImageString. '.' .$image->getClientOriginalExtension();
            $location = public_path('images/brands/' . $img);
            Image::make($image)->save($location);
            $brand->image = $img;
           
            }
        $brand->save();

        session()->flash('success' , 'Brand has been added Successfully!');
        return redirect()->route('admin.brand');

     }

    

    public function edit($id){
        $brand = Brand::find($id);
        if(!is_null($brand)){
            return view('admin.editBrand', compact('brand'));

        }
        else{
            return redirect()->route('admin.brand');
        }
    }

    public function update(Request $request , $id){
        $this->validate($request, [
            'name' => 'required',
            'brand_image' => 'nullable|image',
           
            ]);


        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->slug = str::slug($request->name);
        // image insert
        $randomImageString = Str::random(30);
        if($request->hasFile('brand_image')){
            //delete old image file first
            if(File::exists('images/brands/'. $brand->image)){
                File::delete('images/brands/'. $brand->image);
            }
            $image = $request->file('brand_image');
            $img = time() .$randomImageString . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/brands/' . $img);
            Image::make($image)->save($location);
            $brand->image = $img;
           
            }
        $brand->save();

        session()->flash('success' , 'Brand has been Updated Successfully!');
        return redirect()->route('admin.brand');
    }

    public function delete($id){
        
    $brand = Brand::find($id);

        //Delete brand images
        if(File::exists('images/brands/'. $brand->image)){
            File::delete('images/brands/'. $brand->image);
            }

        $brand->delete();
    
    session()->flash('success', 'Brand has been Deleted Successfully!');
    return back();

    }
}