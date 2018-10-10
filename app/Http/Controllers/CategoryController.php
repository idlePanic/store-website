<?php

namespace App\Http\Controllers;

use App\Category;
use App\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Compound;

class CategoryController extends Controller
{
    public function show(Category $cats)
    {
        $categories = DB::table('categories')->get();
//        dd($cat);
        return view('category',compact('categories'));
    }

    public function single_cat(Category $category)
    {
        $current_products=DB::table('products')->where('cat_id',$category->id)->get();
        return view('single_category',compact('current_products'));
    }
}
