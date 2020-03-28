<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Gallery;
use App\Category;
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
    public function gallery()
    {
        $galleries = Gallery::all();
        return view('gallery')->withGalleries($galleries);
    }
    public function services()
    {
    	return view('services');
    }
    public function products()
    {
        $products = Product::all();
        $categories = Category::all();
    	return view('products')->withProducts($products)->withCategories($categories);
    }
    public function contact()
    {
    	return view('contact');
    }
}
