<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Product;
use App\Category;
use App\Gallery;
use App\Testimonial;
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
        $galleryCount = Gallery::count();
        $testimonialCount = Testimonial::count();
        return view('admin.index')->withMaterialCount($materialCount)->withProductCount($productCount)->withCategoryCount($categoryCount)->withGalleryCount($galleryCount)->withTestimonialCount($testimonialCount);
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
            'image' => 'required',
            'is_Featured' => 'required'
        ]);
        //dd($validatedData);
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
    public function editproduct($id)
    {
        $materials = Material::all();
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.editproduct')->withProduct($product)->withMaterials($materials)->withCategories($categories); //wait let me write something
    }
    public function editproductfinal(Request $request, $id)
    {
        //write code here
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
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        if($request->hasFile('image')) {
            // Update Image here
            //dd('With Image request');
            $image= $request->file('image');
            $randomNum = bin2hex(random_bytes(8));
            $fileName = $validatedData['name'] . time() . '_' . $randomNum . '.jpg';
            //$fileName = time() . '_' . $randomNum . '.png';
            $location = public_path('img/products/' . $fileName);
            Image::make($image)->resize(1000,685)->save($location);
            $product->update(['image' => $fileName]);
        }

        return redirect('/admin/home')->with('message', 'Product Updated Successfully');

        // FInally save everything here test
        // $product->save();


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
    public function deleteproduct($id)
    {
        $product = Product::findOrFail($id)->delete();
        return redirect('/admin/home')->with('message', 'Product Deleted Successfully');
    }
    public function viewmaterial()
    {
        $materials = Material::all();
        //dd($materials);
        return view('admin.viewmaterials')->withMaterials($materials);
    }
    public function editmaterial($id)
    {
        $material = Material::findOrFail($id);
        return view('admin.editmaterial')->withMaterial($material);
    }
    public function posteditmaterial(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        $material = Material::findOrFail($request->id);
        
        $material->update($validatedData);

        return redirect('/admin/home')->with('message', 'Material Updated Successfully');
    }
    public function deletematerial($id)
    {
        $material = Material::findOrFail($id)->delete();
        return redirect('/admin/home')->with('message', 'Material Deleted Successfully');
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
    public function editcategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.editcategory')->withCategory($category);
    }
    public function posteditcategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        $slug = str_slug($request->name, "-");
        
        $validatedData['slug'] = $slug;

        $category = Category::findOrFail($request->id);
        
        $category->update($validatedData);

        return redirect('/admin/home')->with('message', 'Category Updated Successfully');
    }
    public function deletecategory($id)
    {
        $category = Category::findOrFail($id)->delete();
        return redirect('/admin/home')->with('message', 'Category Deleted Successfully');
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
    public function addtestimonial()
    {
        return view('admin.addtestimonial');
    }
    public function posttestimonial(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'organisation' => 'required',
            'message' => 'required',
            'image' => 'sometimes|file'
        ]);
        $testimonial = Testimonial::create($validatedData);
        if($request->hasFile('image')) {
            $image= $request->file('image');
            $randomNum = bin2hex(random_bytes(8));
            $fileName = $validatedData['name'] . time() . '_' . $randomNum . '.jpg';
            $location = public_path('img/testimonials/' . $fileName);
            Image::make($image)->resize(479,479)->save($location);
            $testimonial->update(['image' => $fileName]);
        }
        return redirect('/admin/home')->with('message', 'Testimonial Added Successfully');   
    }
    public function viewtestimonial()
    {
        $testimonials = Testimonial::all();
        //dd($testimonials);
        return view('admin.viewtestimonial')->withTestimonials($testimonials);
    }
    public function edittestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.edittestimonial')->withTestimonial($testimonial);
    }
    public function deletetestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id)->delete();
        return redirect('/admin/home')->with('message', 'Testimonial Deleted Successfully');
    }
    public function postedittestimonial(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'organisation' => 'required',
            'message' => 'required',
            'image' => 'sometimes|file'
        ]);
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($validatedData);
        if($request->hasFile('image')) {
            $image= $request->file('image');
            $randomNum = bin2hex(random_bytes(8));
            $fileName = $validatedData['name'] . time() . '_' . $randomNum . '.jpg';
            $location = public_path('img/testimonials/' . $fileName);
            Image::make($image)->resize(479,479)->save($location);
            $testimonial->update(['image' => $fileName]);
        }
        return redirect('/admin/home')->with('message', 'Testimonial Updated Successfully');
    }
}