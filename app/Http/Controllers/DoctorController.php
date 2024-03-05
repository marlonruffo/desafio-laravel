<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
class DoctorController extends Controller
{
    public function create()
    {
        $doctor = new Doctor();
        return view('doctor.create', compact('doctor'));
    }
    public function view()
    {
        return view('doctor.view');
    }
    public function edit(Doctor $doctor)
    {
        return view('doctor.edit', compact('doctor'));
    }
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctor.management', compact('doctors'));
        
    }
    public function store(Request $request){
        $data=($request->all());
        Doctor::create($data);
        return redirect('/doctors');
        
        
        return redirect('/doctor/management');
    
    }
    public function show(Doctor $doctor)
    {
        return view('doctor.show', compact('doctor'));
    }
    public function update(Request $request, Doctor $doctor)
    {
        $data = $request->all();
        $doctor->update($data);
        return redirect('/doctors');
    }
}
