<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function create()
    {
        return view('specialty.create');
    }
    public function view()
    {
        return view('specialty.view');
    }
    public function edit()
    {
        return view('specialty.edit');
    }
    public function management()
    {
        $specialties = Specialty::all(); 
        return view('specialty.management',[
            'specialties' => $specialties
        ]);
        
    }
}
