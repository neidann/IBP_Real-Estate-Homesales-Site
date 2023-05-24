<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return view("home.pages.properties");
    }
    public function references()
    {
        return view("home.pages.references");
    }
}
