<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
     public function index()
    {
        $categories = ServiceCategory::all();
        // dd($categories);
        return view('backend.admin.servicecategory.listservicecategory', compact('categories'));
    }

    public function create()
    {
        return view('backend.admin.servicecategory.addcategories');
    }

     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:service_categories,slug',
           
            // 'status' => 'required|boolean',
            // 'image' => 'nullable|image|max:2048',
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = 'assets/upload/service/image/';
            $file->move(public_path($path), $fileName);
            $image = $path . $fileName;
        }

        ServiceCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image,
        ]);

        return redirect()->route('admin.service-categories.index')->with('success', 'Category created!');
    }
 public function edit($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return view('backend.admin.servicecategory.update', compact('category'));
    }

    // 🔹 Update Existing Category
    public function update(Request $request, $id)
    {
        $category = ServiceCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:service_categories,slug,' . $id,
            // 'description' => 'nullable|string',
            // 'status' => 'required|boolean',
            // 'image' => 'nullable|image|max:2048',
        ]);

        $image = $category->image;

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($image && file_exists(public_path($image))) {
                unlink(public_path($image));
            }

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = 'assets/upload/service/image/';
            $file->move(public_path($path), $fileName);
            $image = $path . $fileName;
        }

        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image,
        ]);

        return redirect()->route('admin.service-categories.index')->with('success', 'Category updated!');
    }

    // 🔹 Delete Category
    public function destroy($id)
    {
        $category = ServiceCategory::findOrFail($id);

        // Delete image from public folder
        if ($category->image && file_exists(public_path($category->image))) {
            unlink(public_path($category->image));
        }

        $category->delete();

        return redirect()->route('admin.service-categories.index')->with('success', 'Category deleted!');
    }
}
