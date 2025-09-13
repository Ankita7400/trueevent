<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\ServiceCategory;

class SubCategoryController extends Controller
{
   public function index()
    {
        $subcategories = SubCategory::with('serviceCategory')->get();
        return view('backend.admin.subcategory.listsubcategory', compact('subcategories'));
    }

    public function create()
    {
        $categories = ServiceCategory::all();
        return view('backend.admin.subcategory.addsubcategories', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'name' => 'required',
            'slug' => 'required|unique:sub_categories,slug',
            // 'description' => 'nullable',
            // 'status' => 'required|boolean',
            // 'image' => 'nullable|image|max:2048',
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = 'assets/upload/subcategory/image/';
            $request->file('image')->move(public_path($path), $fileName);
            $image = $path . $fileName;
        }

        SubCategory::create([
            'service_category_id' => $request->service_category_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image,
        ]);

        return redirect()->route('admin.sub-categories.index')->with('success', 'SubCategory added.');
    }

    public function edit($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        $categories = ServiceCategory::all();
        return view('backend.admin.subcategory.update', compact('subcategory', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $subcategory = SubCategory::findOrFail($id);

        $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'name' => 'required',
            'slug' => 'required|unique:sub_categories,slug,' . $id,
            // 'description' => 'nullable',
            // 'status' => 'required|boolean',
            // 'image' => 'nullable|image|max:2048',
        ]);

        $image = $subcategory->image;
        if ($request->hasFile('image')) {
            if ($image && file_exists(public_path($image))) {
                unlink(public_path($image));
            }
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = 'assets/upload/subcategory/image/';
            $request->file('image')->move(public_path($path), $fileName);
            $image = $path . $fileName;
        }

        $subcategory->update([
            'service_category_id' => $request->service_category_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $image,
        ]);

        return redirect()->route('admin.sub-categories.index')->with('success', 'SubCategory updated.');
    }

    public function destroy($id)
    {
        $subcategory = SubCategory::findOrFail($id);

        if ($subcategory->image && file_exists(public_path($subcategory->image))) {
            unlink(public_path($subcategory->image));
        }

        $subcategory->delete();
        return redirect()->route('admin.sub-categories.index')->with('success', 'SubCategory deleted.');
    }
}
