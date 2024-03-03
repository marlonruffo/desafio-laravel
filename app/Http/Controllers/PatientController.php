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
    public function management()
    {
        $patients = Patient::all();
        return view('patient.management',[
            'patients' => $patients
        ]);
        return view();
    }
}
