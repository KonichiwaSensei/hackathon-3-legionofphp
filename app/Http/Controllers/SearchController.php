<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search_term = $request->input('search');


        if ($search_term) {
            $results = Animal::query()
                ->leftJoin('owners', 'animals.owner_id', 'owners.id' )
                ->leftJoin('images', 'animals.image_id', 'images.id')
                ->where('name', 'like', '%' . $search_term . '%')
                ->orderBy('animals.id', 'asc')
                ->limit(10)
                ->get();
        }


        return view('welcome', [
            'search_term' => $search_term,
            'results' => $results ?? []
        ]);
    }
}
