<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::latest()->get();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'child_name' => 'required|string|max:255',
            'parent_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'contact_number' => 'required|string|max:20',
        ]);

        Patient::create($request->only([
            'child_name',
            'parent_name',
            'date_of_birth',
            'gender',
            'contact_number'
        ]));

        return redirect()->route('patients.index')->with('success', 'Patient registered successfully!');
    }
}