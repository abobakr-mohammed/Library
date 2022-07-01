<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Traits\UploadImages;
class CategoryController extends Controller
{
   use UploadImages;

    // create category 
    public function create_category(){

        return view('admin.create_category');
    }

    // show category 
    public function show_categories(){
        $categories = Category::get();
        return view('admin.show_category',compact('categories'));
    }

    // store category in DB
    public function store_category(CategoryRequest $request){
        $fileName = $this->save_photo($request->image, 'images/categories');
        Category::create([

        'name' => $request->name,
        'image' => $fileName

        ]);
        return redirect()->back()->with('success','Category Created Successfully');
        
    }

    // delete category 
    public function delete_category($id){
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->back()->with('deleted','Category Deleted Successfully');
        }
        public function edit_category($id){
           $categories = Category::find($id);
           return view('admin.edit_category',compact('categories'));
        }

    // update category 
    public function update_category(Request $request){
        $name = $request->name;
        $image = $request->image;
    }

    // show books of category 
    public function show_cats_books($id){
        $categories = Category::find($id);
        $books = $categories->books;
        return view('admin.show_category_books',compact('books'));
    }
}
