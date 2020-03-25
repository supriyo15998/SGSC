<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class PagesController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }
    public function about()
    {
    	return view('about');
    }
    public function services()
    {
    	return view('services');
    }
    public function products()
    {
        $products = Product::all();
        //dd($products);
    	return view('products')->withProducts($products);
    }
    public function contact()
    {
    	return view('contact');
    }
}
