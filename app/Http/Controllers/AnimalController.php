<?php


namespace App\Http\Controllers;
use App\Models\Animal;
use Illuminate\Http\Request;


class AnimalController extends Controller
{
    public function show($animal_id)
    {
        $animal = Animal::findOrFail($animal_id);
        return view('animal', compact('animal'));
    }

    public function create()
    {

        $animal = new Animal();

        return view('formanimal', compact('animal'));
    }

    public function store(Request $request)
    { 

           $animal = new Animal();
           $animal->name = $request->input('name');
           $animal->species = $request->input('species');
           $animal->breed = $request->input('breed');
           $animal->age = $request->input('age');
           $animal->weight = $request->input('weight');
           $animal->save();

           return redirect()->route('animals.edit', $animal->id);
    }

    public function update(Request $request, $id)
    {


        $animal = Animal::findOrFail($id);
        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        $animal->save();

        session()->flash('success_message','the animal was updated');

       return redirect()->route('animals.edit', $animal->id);
}
            

public function edit($id)
{

    $animal = Animal::findOrFail($id);

    return view('formanimal', compact('animal'));
}

public function delete($id)
{
    $animal = Animal::findOrFail($id);
    $animal->delete();
    session()->flash('success_message','the animal was deleted');

    return redirect()->route('animals.create');
}



}

