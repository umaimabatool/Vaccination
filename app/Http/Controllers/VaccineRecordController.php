<?php

namespace App\Http\Controllers;

use App\Models\VaccinationRecord;
use App\Models\Patient;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineRecordController extends Controller
{
    public function index()
    {
        $records = VaccinationRecord::with(['patient', 'vaccine'])->latest()->get();
        return view('records.index', compact('records'));
    }

    public function create()
    {
        $patients = Patient::all();
        $vaccines = Vaccine::all();
        return view('records.create', compact('patients', 'vaccines'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'vaccine_id' => 'required|exists:vaccines,id',
            'vaccination_date' => 'required|date',
            'status' => 'required|string',
        ]);

        VaccinationRecord::create($request->all());

        return redirect()->route('records.index')->with('success', 'Vaccination Record created successfully!');
    }

    public function edit($id)
    {
        $record = VaccinationRecord::findOrFail($id);
        $patients = Patient::all();
        $vaccines = Vaccine::all();

        return view('records.edit', compact('record', 'patients', 'vaccines'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'vaccine_id' => 'required|exists:vaccines,id',
            'vaccination_date' => 'required|date',
            'status' => 'required|string',
        ]);

        $record = VaccinationRecord::findOrFail($id);
        $record->update($request->all());

        return redirect()->route('records.index')->with('success', 'Vaccination Record updated successfully!');
    }

    public function destroy($id)
    {
        $record = VaccinationRecord::findOrFail($id);
        $record->delete();

        return redirect()->route('records.index')->with('success', 'Vaccination Record deleted successfully!');
    }
}