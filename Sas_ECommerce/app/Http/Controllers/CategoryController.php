<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class CategoryController extends Controller
{

    public function showCategory(){

        $categories = Category::orderBy('id' ,'desc')->get();
         return view ('admin.showCategory' , compact('categories'));
     }

     
     public function addCategory(){

        $primary_categories = Category::orderBy('id', 'desc')->where('parent_id' , NULL)->get();
        return view ('admin.addCategory' , compact('primary_categories'));
    }

    public function addCategoryStore(Request $request ){

            $this->validate($request, [
            'name' => 'required',
            'category_image' => 'nullable|image',
           


     ]);


        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->slug = str::slug($request->name);
        //$category->parent_id = $request->parent_id;
        // image insert
        if($request->hasFile('category_image')){
   
            $image = $request->file('category_image');
            $img = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/categories/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
           
            }
        $category->save();

        session()->flash('success' , 'Category has been added Successfully!');
        return redirect()->route('admin.category');

     }

    

    public function edit($id){
        $primary_categories = Category::orderBy('id', 'desc')->where('parent_id' , NULL)->get();
        $category = Category::find($id);
        if(!is_null($category)){
            return view('admin.editCategory', compact('category', 'primary_categories'));

        }
        else{
            return redirect()->route('admin.category');
        }

        return view ('admin.editCategory');
    }

    public function update(Request $request , $id){
        $this->validate($request, [
            'name' => 'required',
            'category_image' => 'nullable|image',
           
            ]);


        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->slug = str::slug($request->name);
        // image insert
        if(!is_null($request->category_image)){
            //if it is a parent category then delete all its child category
            if($category->parent_id == NULL){
                 //Delete category images
            if(File::exists('images/categories/'. $category->image)){
                File::delete('images/categories/'. $category->image);
            }
               
            }
            else{

                 //delete all child category
                 $child_categories = Category::orderBy('name' ,'desc')->where('parent_id' , $category->id)->get();
                 foreach ($child_categories as $sub) {
                     if(File::exists('images/categories/'. $sub->image)){
                     File::delete('images/categories/'. $sub->image);
                     }
                   
                 }

            }
    
           
    
           
        }



        if($request->hasFile('category_image')){
            //delete old image file first
            if(File::exists('images/categories/'. $category->image)){
                File::delete('images/categories/'. $category->image);
            }
            $image = $request->file('category_image');
            $img = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/categories/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
           
            }
        $category->save();

        session()->flash('success' , 'Category has been Updated Successfully!');
        return redirect()->route('admin.category');
    }

    public function delete($id){
        
    $category = Category::find($id);
    if(!is_null($category)){
        //if it is a parent category then delete all its child category
        if($category->parent_id == NULL){
            //delete all child category
            $child_categories = Category::orderBy('name' ,'desc')->where('parent_id' , $category->id)->get();
            foreach ($child_categories as $sub) {
                if(File::exists('images/categories/'. $sub->image)){
                File::delete('images/categories/'. $sub->image);
                }
                $sub->delete();
            }
        }

        //Delete category images
        if(File::exists('images/categories/'. $category->image)){
                File::delete('images/categories/'. $category->image);
            }

        $category->delete();
    }
    session()->flash('success', 'Category has been Deleted Successfully!');
    return back();

    }
}