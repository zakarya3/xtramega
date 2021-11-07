<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function index()
    {
        $featured_products = Product::where('trending','1')->take(8)->get();
        return view('welcome', compact('featured_products'));
    }
}
