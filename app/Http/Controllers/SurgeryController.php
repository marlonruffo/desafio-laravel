<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurgeryController extends Controller
{

    public function index()
    {
        return view('surgery.list');
    }

    public function create()
    {
        return view('surgery.create');
    }

    public function management()
    {
        return view('surgery.management');
    }

}
