<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surgery;

class SurgeryController extends Controller
{

    public function list()
    {
        $surgeries = Surgery::all();
        return view('surgery.management', compact('surgeries'));
    }

    public function create()
    {
        $surgery = new Surgery();
        return view('surgery.create', compact('surgery'));
    }

    public function index()
    {
        $surgeries = Surgery::all();
        return view('surgery.management', compact('surgeries'));
        
    }

    public function show(Surgery $surgery)
    {
        return view('surgery.show', compact('surgery'));
    }

    public function edit(Surgery $surgery)
    {
        return view('surgery.edit', compact('surgery'));
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        Surgery::create($data);
        return redirect('/surgeries');
    }

    public function update(Request $request, Surgery $surgery)
    {
        $data = $request->all();
        $surgery->update($data);
        return redirect('/surgeries');
    }
}
