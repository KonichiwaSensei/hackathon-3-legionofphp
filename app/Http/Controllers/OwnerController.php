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
}











