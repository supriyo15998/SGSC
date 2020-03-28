<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Product;
use App\Category;
use App\Gallery;
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
        $categoryCount = Category::count();
        return view('admin.index')->withMaterialCount($materialCount)->withProductCount($productCount)->withCategoryCount($categoryCount);
    }
    public function viewproduct()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.viewproduct')->withProducts($products)->withCategories($categories);
    }
    public function addproduct()
    {
        $materials = Material::all();
        $categories = Category::all();
        //dd($categories);
        return view('admin.addproduct')->withMaterials($materials)->withCategories($categories);
    }
    public function postproduct(Request $request)
    {

        $validatedData = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'height' => 'required',
            'width' => 'required',
            'length' => 'required',
            'material_id' => 'required',
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
    public function addcategory()
    {
        return view('admin.addcategory');
    }
    public function postcategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        $slug = str_slug($request->name, "-");
        
        $validatedData['slug'] = $slug;
        //dd($validatedData);
        $category = Category::create($validatedData);
        return redirect('/admin/home')->with('message', 'Category Added Successfully');
    }
    public function viewcategory()
    {
        $categories = Category::all();
        return view('admin.viewcategory')->withCategories($categories);
    }
    public function addphoto()
    {
        return view('admin.addphoto');
    }
    public function viewphoto()
    {
        $galleries = Gallery::all();
        //dd($galleries);
        return view('admin.viewphoto')->withGalleries($galleries);
    }
    public function postphoto(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|file'
        ]);

        $filenamewithextension = $request->file('image')->getClientOriginalName();
        
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        $extension = $request->file('image')->getClientOriginalExtension();

        $filenametostore = $filename . '_' . time() . '.' . $extension;

        $thumbnail = $filename . '_thumbnail_' . time() . '.' . $extension;
        
        $originalLocation = public_path('img/gallery/' . $filenametostore);
        
        $thumbnailLocation = public_path('img/gallery/thumbnails/' . $thumbnail);

        Image::make($request->file('image'))->save($originalLocation);

        $img = Image::make($request->file('image'))->resize(250,250, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->save($thumbnailLocation);

        //$this->createThumbnail($thumbnailLocation, 250, 250);

        $gallery = Gallery::create($validatedData);

        $gallery->update(['image' => $filenametostore, 'thumbnail' => $thumbnail]);

        //$gallery->update(['thumbnail' => $thumbnail]);

        return redirect('/admin/home')->with('message', 'Photo Added Successfully');

    }
    public function deletephoto($id)
    {
        $photo = Gallery::findOrFail($id)->delete();
        return redirect('/admin/home')->with('message', 'Photo Deleted Successfully');
    }
}
