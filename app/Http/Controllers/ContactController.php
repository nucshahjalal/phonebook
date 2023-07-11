<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(2);
        return view('contact.list', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
    
        Contact::create($request->all());
     
        return redirect('contact')
                        ->with('success','Contact created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $contact = Contact::find($id);
       return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
  
        $contact->update($request->all());
  
        return redirect('contact')->with('success','Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //$id = $request->id;
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('contact')->with('success','Contact delete successfully');
    }
}
