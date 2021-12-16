<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::all();
        // pagination
         $products = Product::where('name', 'LIKE', '%'.$request->search.'%')->paginate(6);
        $products = Product::paginate(6);
        return view('shop.index', compact('products', 'categories'));
    }

    public function category($id){

        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(6);
        return view('shop.index', compact('products', 'categories'));
    }
    public function show($id){
        $product = Product::findOrFail($id);
        return view('shop.show', compact('product'));
    }

}
