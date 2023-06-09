<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function show($id)
    {
        $visit = Visit::findOrFail($id); 
        return view('visit', compact('visit'));
    }
       
    public function create($animal_id)
    {   
        $animal = Animal::findOrFail($animal_id); 
        $visit = new Visit();

        return view('visit', compact('animal', 'visit'));
    }
    
    public function store(Request $request)
    {
        $visit = new Visit();
        $visit->animal_id = $request->input('animal_id');
        $visit->report = $request->input('report');
        $visit->save();
        
        return redirect()->route('visit.edit', $visit->id);
    }

    public function update(Request $request, $id)
    {
        $visit = Visit::findOrFail($id);
        $visit->animal_id = $request->input('animal_id');
        $visit->report = $request->input('report');
        $visit->save();
        
        session()->flash('success_message','the visit was updated');


        return redirect()->route('visit.edit', $visit->id);
    }
   
    public function edit($id)
    {
        $visit = Visit::findOrFail($id);

        return view('visit', compact('visit'));
    }

    public function delete($id)
    {
        $visit = Visit::findOrFail($id);
        $visit->delete();
        
        session()->flash('success_message','the visit was deleted');

        return redirect()->route('visit.create');
    }
}
