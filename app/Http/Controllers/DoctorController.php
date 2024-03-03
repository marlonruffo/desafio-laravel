<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
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
    public function index()
    {
        $doctors = Doctor::all(); 
        return view('doctor.management',[
            'doctors' => $doctors
        ]);
        
    }
    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->birthdate = $request->birthdate;
        $user->role = 'doctor';
        $doctor = new Doctor();
        $doctor->work_time = $request->work_time;
        $doctor->crm = $request->crm;
        $doctor->specialty_id = $request->specialty_id;
        $user->save();
        $doctor->user_id = $user->id;
        $doctor->save();
        
        
        return redirect('/doctor/management');
    
    }
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctor.show',[
            'doctor' => $doctor
        ]);
    }
}
