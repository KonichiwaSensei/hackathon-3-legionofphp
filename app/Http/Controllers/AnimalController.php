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
}
            



