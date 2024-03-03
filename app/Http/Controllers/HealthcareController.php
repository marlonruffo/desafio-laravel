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
    public function index()
    {
        $healthcares = Healthcare::all(); 
        return view('healthcare.management',[
            'healthcares' => $healthcares
        ]);
        
    }
    public function store(Request $request)
    {
        $healthcare = new Healthcare();
        $healthcare->name = $request->name;
        $healthcare->description = $request->description;
        $healthcare->discount = $request->discount;
        $healthcare->save();
        return redirect('/healthcare/management');
    }
    public function show($id)
    {
        $healthcare = Healthcare::findOrFail($id);
        return view('healthcare.show',[
            'healthcare' => $healthcare
        ]);
    }
}
