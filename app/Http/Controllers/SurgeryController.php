<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surgery;
class SurgeryController extends Controller
{

    public function list()
    {
        
    }

    public function create()
    {
        return view('surgery.create');
    }

    public function index()
    {
        $surgeries = Surgery::all();
        return view('surgery.management')->with('surgeries', $surgeries);
        
    }
    

}
