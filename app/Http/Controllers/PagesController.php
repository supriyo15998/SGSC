<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Gallery;
use App\Category;
use App\Testimonial;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuotationPosted;
use App\Mail\ContactForm;
class PagesController extends Controller
{
    public function index()
    {
        $title = "Home | Sarkar Gas Servicing Center";
        $latestProducts = Product::orderBy('id', 'desc')->take(3)->get();
        //dd($latestProducts);
    	return view('welcome')->withLatestProducts($latestProducts)->withTitle($title);
    }
    public function about()
    {
        $title = "About Us | Sarkar Gas Servicing Center";
        $testimonials = Testimonial::all();
    	return view('about')->withTestimonials($testimonials)->withTitle($title);
    }
    public function gallery()
    {
        $title = "Gallery | Sarkar Gas Servicing Center";
        $galleries = Gallery::all();
        return view('gallery')->withGalleries($galleries)->withTitle($title);
    }
    public function services()
    {
        $title = "Services | Sarkar Gas Servicing Center";
    	return view('services')->withTitle($title);
    }
    public function products()
    {
        $title = "Products | Sarkar Gas Servicing Center";
        $products = Product::all();
        $categories = Category::all();
    	return view('products')->withProducts($products)->withCategories($categories)->withTitle($title);
    }

    public function individualproduct($categoryslug, $id)
    {
        $title = "Sarkar Gas Servicing Center";
        //return view('propertiesSingle');
        $product = Product::findOrFail($id);
        //dd($product);
        return view('propertiesSingle')->withProduct($product)->withTitle($title);
    }
    public function quotation($id)
    {
        $title = "Quotation | Sarkar Gas Servicing Center";
        $product = Product::findOrFail($id);
        //dd($product);
        return view('quotation')->withProduct($product)->withTitle($title);
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
        $title = "Contact Us | Sarkar Gas Servicing Center";
    	return view('contact')->withTitle($title);
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
