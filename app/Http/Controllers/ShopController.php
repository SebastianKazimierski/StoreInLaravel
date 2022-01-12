<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index(){
        $products = Product::take(10)->get();
        return view('shop', ['allProducts' =>$products]);
    }
}
