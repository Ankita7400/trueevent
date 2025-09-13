<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\SubCategory;
use App\Models\Product;


class IndexController extends Controller
{
    //  public function index()
    // {
    //     // $products = Product::with('subCategory')->get();
    //     return view('frontend.home');
    // }






     // Show Home Page with All Service Categories
    public function index()
    {
        // $categories = ServiceCategory::where('status', 1)->get();
          $categories = ServiceCategory::where('status', 1)
                    ->latest()
                    ->take(8) // LIMIT to 8
                    ->get();
        return view('frontend.home', compact('categories'));
    }

    // Show SubCategories under a specific Category
    public function showCategory($slug)
    {

        
        $category = ServiceCategory::where('slug', $slug)->where('status', 1)->firstOrFail();
        
        $subcategories = $category->subCategories()->where('status', 1)->get();

        return view('frontend.subcategories', compact('category', 'subcategories'));
    }

    // Show Products under a specific SubCategory
    public function showSubCategory($slug)
    {
        $subcategory = SubCategory::where('slug', $slug)->where('status', 1)->firstOrFail();
        $products = $subcategory->products()->where('status', 1)->get();

        return view('frontend.products', compact('subcategory', 'products'));
    }



    public function allCategories()
{
    $categories = ServiceCategory::where('status', 1)->latest()->get(); // paginated
    return view('frontend.allservices', compact('categories'));
}

    public function about()
{
  
    return view('frontend.about');
}
    public function contact()
{
  
    return view('frontend.contact');
}



}
