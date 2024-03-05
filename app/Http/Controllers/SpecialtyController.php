<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function create()
    {
        $specialty = new Specialty();

        return view('specialty.create', compact('specialty'));
    }

    public function view()
    {
        return view('specialty.view');
    }

    public function edit(Specialty $specialty)
    {
        return view('specialty.edit', compact('specialty'));
    }

    public function index()
    {
        $specialties = Specialty::all(); 
        return view('specialty.management', compact('specialties'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Specialty::create($data);
        return redirect('/specialties');
    }

    public function show(Specialty $specialty)
    {
        return view('specialty.show', compact('specialty'));
    }

    public function update(Request $request, Specialty $specialty)
    {
        $data = $request->all();
        $specialty->update($data);
        return redirect('/specialties');
    }
    public function destroy(Specialty $specialty)
    {
        $specialty->delete();
        return redirect('/specialties');
    }
}
