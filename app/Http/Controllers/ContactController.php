<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use GuzzleHttp\Promise\Create;
use PhpParser\Node\Stmt\Return_;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contacts = Contact::query();
        if($request->input('search')){
            $contacts = $contacts->where('name', 'like', '%' . $request->input('search'). '%')
            ->orWhere('email', 'like', '%'.$request->input('search').'%');
        }
        if($request->input('sort')){
            $contacts = $contacts->orderBy($request->input('sort'), $request->input('direction', 'asc'));
        }else{
            $contacts->orderBy('name', 'asc');
        }

        return view('index', ['contacts'=>$contacts->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts',
            'phone' => 'nullable',
            'address' => 'nullable'
        ]);
        Contact::Create($request->all());
        return redirect()->route('contact.index')->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        Return view('show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $contact = Contact::findOrFail($id);

        Return view('edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts,email,' . $id,
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('contact.index')->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Contact delete successfully.');
    }
}
