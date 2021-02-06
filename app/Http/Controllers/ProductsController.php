<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shopping\Cart;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   public function index()
    {
       $products = Product::all();
      //  return view('products.index', ['products' => $products]);
      return view('products.index',['products'=>$products]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }
}
