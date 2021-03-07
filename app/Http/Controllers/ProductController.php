<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
	public function index(){
		$prod = Product::all();
		return view('backend.pages.products.index')->with('products',$prod);
	}
}
