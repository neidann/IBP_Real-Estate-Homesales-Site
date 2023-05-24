<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use App\Models\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public $settings;
   public $categories;
   public function __construct(){
       $this->settings = Settings::first();
       $this->categories = Category::all();
   }
    public function index()
    {
        return view("home.index",[
            'settings' => $this->settings,
            'categories' => $this->categories,
        ]);
    }


    public function contact()
    {
        return view("home.pages.contact",[
            'settings' => $this->settings,
            'categories' => $this->categories,
        ]);
    }


    public function about()
    {
        return view("home.pages.about",[
            'settings' => $this->settings,
            'categories' => $this->categories,
        ]);
    }
    public function properties()
    {
        $properties = Property::paginate(6);
        return view("home.cart.property-list",[
            'settings' => $this->settings,
            'categories' => $this->categories,
            'properties' => $properties,
            'ispaginated' => true
        ]);
    }
    public function references()
    {
        return view("home.pages.references",[
            'settings' => $this->settings,
            'categories' => $this->categories,
        ]);
    }

    public function category_property($id, $slug){

        $properties = Category::find($id)->properties;
        return view("home.cart.property-list",[
            'settings' => $this->settings,
            'categories' => $this->categories,
            'properties' => $properties
        ]);
    }
}
