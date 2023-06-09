<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function show($owner_id)
    {
        $owner = Owner::findOrFail($owner_id);
        
        return view('owner', compact('owner_id'));
    }
       
    public function create()
    {
        return view('owner');
    }
    
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'email',
            'phone' => 'string',
            'address' => 'string',
        ]);
        
        Owner::create($validatedData);
        return redirect()->route('home')->with('success', 'Owner created successfully.');
    }

    public function update(Request $request, Owner $owner_id)
    {
        
        $validatedData = $request->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'email',
            'phone' => 'string',
            'address' => 'string',
        ]);
        
        $owner->update($validatedData);
        return redirect()->route('home')->with('success', 'Owner updated successfully.');
    }
   
    public function edit(Owner $owner_id)
    {
        return view('owner.edit', compact('owner_id'));
    }

    public function delete(Owner $owner_id)
    {
        return view('owner.delete', compact('owner_id'));
    }
   
}









