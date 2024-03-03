<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surgery;
class SurgeryController extends Controller
{

    public function list()
    {
        $surgeries = Surgery::all();
        return view('surgery.list',[
            'surgeries' => $surgeries
        ]);
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
