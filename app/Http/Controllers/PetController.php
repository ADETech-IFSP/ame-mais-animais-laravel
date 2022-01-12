<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $genders = \App\Models\PetGender::all();

        return view('app.pet.register', [
            'genders' => $genders
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
