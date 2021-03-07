<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContriller extends Controller
{	
	public function index(){
    	return view('frontend.pages.index');
    }

    public function contact(){
    	return view('frontend.pages.contact');
    }
     public function about(){
    	return view('frontend.pages.about');
    }
    public function products(){
    	return view('frontend.pages.products.index');
    }
    public function shop(){
    	return view('frontend.pages.shop');
    }
}
