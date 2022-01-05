<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
    public function add(){
        $r=request();
        $addCategory=Category::create([
            'name'=>$r->categoryName,
        ]);

        Session::flash('success', "Category created successfully!");

        return redirect()->route('showCategory');
    }

    public function view(){
        $viewCategory=Category::all();
        return view('showCategory')->with('categories', $viewCategory);
    }

    public function delete($id){
        $deleteCategory=Category::find($id);
        $deleteCategory->delete();
        Session::flash('success', "Category was deleted successfully!");
        return redirect()->route('showCategory');

    }

    public function edit($id){
        $categories=Category::all()->where('id', $id);
        return view('editCategory')->with('categories', $categories);
    }

    public function update(){
        $r=request();
        $categories=Category::find($r->CategoryID);
        $categories->name=$r->categoryName;
        $categories->save();
        return redirect()->route('showCategory');
    }
}
