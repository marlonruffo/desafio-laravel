<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurgeryController extends Controller
{

    public function index()
    {
        return view('surgery.surgeryList');
    }

    public function create()
    {
        return view('surgery.createSurgery');
    }

    public function management()
    {
        return view('surgery.surgeryManagement');
    }

}
