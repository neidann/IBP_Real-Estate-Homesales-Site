<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(8);
        return view('admin.category.index',[
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $category = new Category();
        $category->title = $request->title;
        $category->description = $request->description;
        $category->slug = $request->slug;
        $category->status = $request->status;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store("public/category_images");
            $category->image = $imagePath;
        }
        $category->save();

        // Redirect or perform any additional actions
        return redirect()->route('admin.category.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category,$id)
    {
        $category = Category::find($id);
        return view('admin.category.show',['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req, $id)
    {
        $item = Category::find($id);
        $item->delete();
        return redirect()->back()->with("success","Message Deleted!");
    }
}
