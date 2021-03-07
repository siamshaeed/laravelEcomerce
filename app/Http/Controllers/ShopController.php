<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ShopController extends Controller
{
    public function index(){
    	$products = Product::all();

    	return view('frontend.pages.shop', compact('products'));
    }
}
