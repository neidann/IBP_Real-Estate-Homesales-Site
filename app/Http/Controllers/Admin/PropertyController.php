<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propertyList = Property::paginate(8);
        return view('admin.property.index',[
            'propertyList' => $propertyList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.property.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $property = new Property();
        $property->user_id = Auth::user()->id;
        $property->category_id = $request->category;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->img_text = $request->image_text;
        $property->sqft = $request->sqft;
        $property->position = $request->position;
        $property->sittingrooms = $request->sitting_rooms;
        $property->bedrooms = $request->bedrooms;
        $property->baths = $request->baths;
        $property->status = $request->status;
        $property->high_price = $request->high_price;
        $property->low_price = $request->low_price;
        $property->age = $request->age;
        $property->address = $request->address;

        if ($request->hasFile('card_image')) {
            $image = $request->file('card_image');
            $imagePath = $image->store("public/property_images");
            $property->card_img = $imagePath;
        }
        $property->save();
        return redirect()->route("admin.property.index")->with("success","CREATED GRACEFULLY!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $property = Property::find($id);
        return view('admin.property.show',[
            'property' => $property
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $property = Property::find($id);
        $categories = Category::all();
        return view('admin.property.edit',[
            'property' => $property,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $property = Property::find($id);
        $property->user_id = Auth::user()->id;
        $property->category_id = $request->category;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->img_text = $request->img_text;
        $property->sqft = $request->sqft;
        $property->position = $request->position;
        $property->sittingrooms = $request->sittingrooms;
        $property->bedrooms = $request->bedrooms;
        $property->baths = $request->baths;
        $property->status = $request->status;
        $property->high_price = $request->high_price;
        $property->low_price = $request->low_price;
        $property->age = $request->age;
        $property->address = $request->address;

        if ($request->hasFile('card_image')) {
            $image = $request->file('card_image');
            $imagePath = $image->store("public/property_images");
            $property->card_img = $imagePath;
        }
        $property->save();
        return redirect()->route("admin.property.index")->with("success","Updated GRACEFULLY!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req, $id)
    {
        $item = Property::find($id);
        $item->delete();
        return redirect()->route('admin.property.index')->with("success","Message Deleted!");
    }
}
