<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactMessage;
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
        return view("home.index");
    }


    public function contact()
    {
        return view("home.pages.contact");
    }


    public function about()
    {
        return view("home.pages.about");
    }
    public function properties()
    {
        $properties = Property::paginate(6);
        return view("home.cart.property-list",[
            'properties' => $properties,
            'ispaginated' => true
        ]);
    }
    public function references()
    {
        return view("home.pages.references");
    }

    public function category_property($id, $slug){

        $properties = Category::find($id)->properties;
        return view("home.cart.property-list",[
            'properties' => $properties
        ]);
    }

    public function contact_message(Request $req){

       $message = new ContactMessage();
       $message->text = $req->message;
       $message->subject = $req->subject;
       $message->ip = request()->ip();
       $message->email = $req->email;
       $message->phone = $req->phone;
       $message->save();
       return redirect()->back()->with("success","Message has been send gracefully!");
    }

}
