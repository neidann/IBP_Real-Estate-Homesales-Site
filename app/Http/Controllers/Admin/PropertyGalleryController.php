<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePropertyGalleryRequest;
use App\Models\Property;
use App\Models\PropertyGallery;

class PropertyGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $property = Property::find($id);
        return view('admin.property.gallery.index',[
            'property' => $property
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyGalleryRequest $req,$id)
    {
        $img =new PropertyGallery();
        $img->property_id = $id;
        $img->order = $req->order;
        $img->image_alt = $req->image_alt;
        $img->image = $req->image;
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imagePath = $image->store("public/gallery/property{$id}");
            $img->image = $imagePath;
        }
        $img->save();
        return redirect()->back()->with("success","Created gracefully!");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $img = PropertyGallery::find($id);
        $img->delete();
        return redirect()->back()->with("success","deleted gracefully");
    }
}
