<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorController extends Controller
{
    public function create()
    {
        return view('doctor.create');
    }
    public function view()
    {
        return view('doctor.view');
    }
    public function edit()
    {
        return view('doctor.edit');
    }
    public function management()
    {
        $doctors = Doctor::all(); 
        return view('doctor.management',[
            'doctors' => $doctors
        ]);
        
    }
}
