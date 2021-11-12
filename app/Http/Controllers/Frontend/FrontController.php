<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;

class FrontController extends Controller
{
    public function index()
    {
        $featured_products = Product::where('trending','1')->take(8)->get();
        $category = Category::all();
        return view('welcome', compact('featured_products', 'category'));
    }
    public function products($name)
    {
        if (Category::where('category_name',$name)->exists()) {
            $category = Category::all();
            $category1 = Category::where('category_name',$name)->first();
            $id = $category1->id;
            $type = Type::where('categ_id',$id)->get();
            $id_type = Type::where('categ_id',$id)->pluck('id');
            $product = Product::whereIn('cate_id',$id_type)->get();
            return view('products',compact('type','category','product'));

        }
        else {
            return redirect('/')->with('status',"Category doesnot exists");
        }
    }

}
