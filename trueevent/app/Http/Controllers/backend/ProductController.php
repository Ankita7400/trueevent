<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;

class ProductController extends Controller
{
  public function index()
    {
        $products = Product::with('subCategory')->get();
        return view('backend.admin.product.listproduct', compact('products'));
    }

    public function create()
    {
        $subcategories = SubCategory::all();
        return view('backend.admin.product.addproduct', compact('subcategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sub_category_id' => 'required|exists:sub_categories,id',
            'name' => 'required',
            'slug' => 'required|unique:products,slug',
            // 'price' => 'nullable|numeric',
            // 'description' => 'nullable',
            // 'status' => 'required|boolean',
            // 'image' => 'nullable|image|max:2048',
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = 'assets/upload/product/image/';
            $request->file('image')->move(public_path($path), $fileName);
            $image = $path . $fileName;
        }

        Product::create([
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product added!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $subcategories = SubCategory::all();
        return view('backend.admin.product.update', compact('product', 'subcategories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'sub_category_id' => 'required|exists:sub_categories,id',
            'name' => 'required',
            'slug' => 'required|unique:products,slug,' . $id,
            // 'price' => 'nullable|numeric',
            // 'description' => 'nullable',
            // 'status' => 'required|boolean',
            // 'image' => 'nullable|image|max:2048',
        ]);

        $image = $product->image;

        if ($request->hasFile('image')) {
            if ($image && file_exists(public_path($image))) {
                unlink(public_path($image));
            }
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = 'assets/upload/product/image/';
            $request->file('image')->move(public_path($path), $fileName);
            $image = $path . $fileName;
        }

        $product->update([
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted!');
    }
}
