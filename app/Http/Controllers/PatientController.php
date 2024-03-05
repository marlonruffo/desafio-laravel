<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function create()
    {
        $patient = new Patient();
        return view('patient.create', compact('patient'));
    }
    public function view()
    {
        return view('patient.view');
    }
    public function edit()
    {
        return view('patient.edit', compact('patient'));
    }
    public function index()
    {
        $patients = Patient::all();
        return view('patient.management', compact('patients'));
    }
    public function show($id)
    {
        return view('patient.show', compact('patient'));
    }
    public function store(Request $request)
    {
        $data=($request->all());
        Patient::create($data);
        return redirect('/patients');
    }
    public function update(Request $request, Patient $patient)
    {
        $data = $request->all();
        $patient->update($data);
        return redirect('/patients');
    }
}
