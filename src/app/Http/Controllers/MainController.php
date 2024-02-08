<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $products = Product::get();
        return view('index', compact('products'));
    }

    public function categories(): View
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code): View
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

   public function product($category, $product = null): View
   {
       return view('product', ['product' => $product]);
   }
}
