<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view("admin.dashboard");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function settings()
    {
        $settings = Settings::first();
        if(isset($settings))
            return view("admin.settings",[
                'settings' => $settings
            ]);


        $settings = new Settings();
        $settings->company_name = "Real Estate Agency";
        $settings->description = "Welcome to Real Estate Agency, your trusted partner in the world of real estate. We are a leading agency dedicated to helping individuals, families, and businesses find their perfect property solutions.";
        $settings->logo="no_img";
        $settings->contact_page = "<h1> hello from contact page </h1>";
        $settings->references_page = "<h1> hello from references page </h1>";
        $settings->about_page = "<h1> hello from about page </h1> ";
        $settings->save();
        return view('admin.settings.index',[
            'settings'=>null
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       return redirect()->route("admin.settings.index")->with("success","Updated successfully!");
    }


}
