<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function create()
    {
        return view('patient.create');
    }
    public function view()
    {
        return view('patient.view');
    }
    public function edit()
    {
        return view('patient.edit');
    }
    public function index()
    {
        $patients = Patient::all();
        return view('patient.management',[
            'patients' => $patients
        ]);
        return view();
    }
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patient.show',[
            'patient' => $patient
        ]);
    }
}
