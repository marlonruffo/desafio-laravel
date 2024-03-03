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
    public function index()
    {
        $specialties = Specialty::all(); 
        return view('specialty.management',[
            'specialties' => $specialties
        ]);
        
    }

    public function store(Request $request)
    {
        $specialty = new Specialty();
        $specialty->name = $request->name;
        $specialty->description = $request->description;
        $specialty->price = $request->price;
        $specialty->save();
        return redirect('/specialty/management');
    }
    public function show($id)
    {
        $specialty = Specialty::findOrFail($id);
        return view('specialty.show',[
            'specialty' => $specialty
        ]);
    }
}
