<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\Type;

class FrontendController extends Controller
{
    public function index()
    { 
        $cat = Category::all()->count();
        $type = Type::all()->count();
        $prd = Product::all()->count();
        $prdQty = Product::where('qty','0')->count();
        $orderAll = Order::all()->count();
        $order = Order::where('status','0')->count();
        return view('admin.index',compact('cat','type','prd','prdQty','orderAll','order'));
    }
}
