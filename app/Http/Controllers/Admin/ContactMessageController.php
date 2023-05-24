<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactMessage $contactMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactMessage $contactMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactMessage $contactMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req, $id)
    {
        $item = ContactMessage::find($id);
        $item->delete();
        return redirect()->back()->with("success","Message Deleted!");
    }
}
