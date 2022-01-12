<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pets = auth()->user()->pets;

        return view('app.home.index', [
            'pets' => $pets,        
        ]);
    }
}
