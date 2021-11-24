<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
use App\Models\Cart;
use App\Models\Brand;

class FilterController extends Controller
{
    public function brand_filter($name, $id_brand)
    {
        if (Category::where('category_name',$name)->exists()) {
            $category = Category::all();
            $category1 = Category::where('category_name',$name)->first();
            $id = $category1->id;
            $type = Type::where('categ_id',$id)->get();
            $brands = Brand::all(); 
            $product = Product::where('brand_id',$id_brand)->paginate(16);
            $count = Cart::where('user_id',Auth::id())->get()->count();
            $cartitems = Cart::where('user_id', Auth::id())->get();
            return view('products',compact('type','category','product','count','cartitems','brands'));

        }
    }
}
