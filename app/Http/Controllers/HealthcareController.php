<?php

namespace App\Http\Controllers;

use App\Models\Healthcare;
use Illuminate\Http\Request;

class HealthcareController extends Controller
{
    public function create()
    {
        $healthcare = new Healthcare();
        return view('healthcare.create', compact('healthcare'));
    }

    public function view()
    {
        return view('healthcare.view');
    }

    public function edit(Healthcare $healthcare)
    {
        return view('healthcare.edit', compact('healthcare'));
    }

    public function index()
    {
        $healthcares = Healthcare::all();
        return view('healthcare.management', compact('healthcares'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Healthcare::create($data);
        return redirect('/healthcares');
    }

    public function show(Healthcare $healthcare)
    {
        return view('healthcare.show', compact('healthcare'));
    }

    public function update(Request $request, Healthcare $healthcare)
    {
        $data = $request->all();
        $healthcare->update($data);
        return redirect('/healthcares');
    }

    public function destroy(Healthcare $healthcare)
    {
        $healthcare->delete();
        return redirect('/healthcares');
    }
}
