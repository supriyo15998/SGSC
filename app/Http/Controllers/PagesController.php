<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Gallery;
use App\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuotationPosted;
use App\Mail\ContactForm;
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
    public function quotation($id)
    {
        $product = Product::findOrFail($id);
        //dd($product);
        return view('quotation')->withProduct($product);
    }

    public function postquotation(Request $request)
    {
        $validatedData = (object) $request->validate([
            'name' => 'required',
            'email' => 'required',
            'product' => 'required',
            'message' => 'required'
        ]);
        $product = Product::findOrFail($validatedData->product);
        $validatedData->product_name = $product->name;
        //dd($validatedData->product_name);
        Mail::to('supriyo15998@gmail.com')->send(new QuotationPosted($validatedData));
        return redirect('/');
    }

    public function contact()
    {
    	return view('contact');
    }
    public function contactpost(Request $request)
    {
        $validatedData = (object) $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        Mail::to('supriyo15998@gmail.com')->send(new ContactForm($validatedData));
        return redirect('/');
    }
}
