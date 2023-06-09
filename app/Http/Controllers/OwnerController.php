<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function show($owner_id)
    {
        $owner = Owner::findOrFail($owner_id); 
        return view('owner', compact('owner'));
    }
       
    public function create()
    {
        $owner = new Owner();

        return view('formowner', compact('owner'));
    }
    
    public function store(Request $request)
    {
        $owner = new Owner();
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');
        $owner->save();
        
        return redirect()->route('owners.edit', $owner->id);
    }

    public function update(Request $request, $id)
    {
        $owner = Owner::findOrFail($id);
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');
        $owner->save();
        
        session()->flash('success_message','the owner was updated');


        return redirect()->route('owners.edit', $owner->id);
    }
   
    public function edit($id)
    {
        $owner = Owner::findOrFail($id);

        return view('formowner', compact('owner'));
    }

    public function delete($id)
    {
        $owner = Owner::findOrFail($id);
        $owner->delete();
        
        session()->flash('success_message','the owner was deleted');

        return redirect()->route('owners.create');
    }
   
}









