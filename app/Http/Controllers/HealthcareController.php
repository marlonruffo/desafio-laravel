<?php

namespace App\Http\Controllers;

use App\Models\Healthcare;
use Illuminate\Http\Request;

class HealthcareController extends Controller
{
    public function create()
    {
        return view('healthcare.create');
    }
    public function view()
    {
        return view('healthcare.view');
    }
    public function edit()
    {
        return view('healthcare.edit');
    }
    public function management()
    {
        $healthcares = Healthcare::all(); 
        return view('healthcare.management',[
            'healthcares' => $healthcares
        ]);
        
    }
}
