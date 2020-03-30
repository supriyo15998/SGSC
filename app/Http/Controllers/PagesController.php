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
        $latestProducts = Product::orderBy('id', 'desc')->take(3)->get();
        //dd($latestProducts);
    	return view('welcome')->withLatestProducts($latestProducts);
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

    public function individualproduct($categoryslug, $id)
    {
        //return view('propertiesSingle');
        $product = Product::findOrFail($id);
        //dd($product);
        return view('propertiesSingle')->withProduct($product);
    }

    public function contact()
    {
    	return view('contact');
    }
}
