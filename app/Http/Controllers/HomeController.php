<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Product;
use Intervention\Image\Facades\Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productCount = Product::count();
        $materialCount = Material::count();
        return view('admin.index')->withMaterialCount($materialCount)->withProductCount($productCount);
    }
    public function viewproduct()
    {
        return view('admin.viewproduct');
    }
    public function addproduct()
    {
        $materials = Material::all();
        return view('admin.addproduct')->withMaterials($materials);
    }
    public function postproduct(Request $request)
    {

        $validatedData = $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'height' => 'required',
            'width' => 'required',
            'length' => 'required',
            'material' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);
        $image= $request->file('image');
        $randomNum = bin2hex(random_bytes(8));
        $fileName = $validatedData['name'] . time() . '_' . $randomNum . '.jpg';
        //$fileName = time() . '_' . $randomNum . '.png';
        $location = public_path('img/products/' . $fileName);
        Image::make($image)->resize(1000,685)->save($location);
        $product = Product::create($validatedData);
        //$this->storeImage($package); 
        $product->update(['image' => $fileName]);
        return redirect('/admin/home')->with('message', 'Product Added Successfully');
    }
    public function addmaterial()
    {
        return view('admin.addmaterial');
    }
    public function postmaterial(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        $material = Material::create($validatedData);
        return redirect('/admin/home')->with('message', 'Material Added Successfully');
    }
    public function viewmaterial()
    {
        $materials = Material::all();
        //dd($materials);
        return view('admin.viewmaterials')->withMaterials($materials);
    }
}
