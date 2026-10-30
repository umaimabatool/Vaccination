<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-xl text-slate-100 leading-tight flex items-center gap-2">
                <span>✏️</span> Edit Vaccination Record
            </h2>
            <a href="{{ route('records.index') }}" class="px-5 py-2.5 bg-slate-800 hover:bg-slate-700 text-slate-300 font-bold rounded-xl border border-slate-700 transition text-sm">
                &larr; Back to Records
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-950 min-h-screen text-slate-100">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-900 border border-slate-800 shadow-2xl rounded-3xl p-8">
                
                <form action="{{ route('records.update', $record->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Select Patient -->
                    <div>
                        <label class="block text-sm font-bold text-slate-300 mb-2">Select Child / Patient</label>
                        <select name="patient_id" required class="w-full bg-slate-950 border border-slate-800 focus:border-cyan-500 rounded-xl px-4 py-3 text-slate-200 text-sm focus:outline-none">
                            <option value="" disabled selected>-- Select Patient --</option>
                            @foreach($patients as $patient)
                                <option value="{{ $patient->id }}" class="bg-slate-900 text-slate-100">
                                    {{ $patient->name ?? $patient->child_name ?? $patient->patient_name ?? 'Patient #'.$patient->id }} 
                                    (Guardian: {{ $patient->guardian_name ?? $patient->father_name ?? 'N/A' }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Select Vaccine -->
                    <div>
                        <label class="block text-sm font-bold text-slate-300 mb-2">Select Vaccine</label>
                        <select name="vaccine_id" required class="w-full bg-slate-950 border border-slate-800 focus:border-cyan-500 rounded-xl px-4 py-3 text-slate-200 text-sm focus:outline-none">
                            <option value="" disabled>-- Select Vaccine --</option>
                            @foreach($vaccines as $vaccine)
                                <option value="{{ $vaccine->id }}" {{ $record->vaccine_id == $vaccine->id ? 'selected' : '' }} class="bg-slate-900 text-slate-100">
                                    {{ $vaccine->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Vaccination Date -->
                    <div>
                        <label class="block text-sm font-bold text-slate-300 mb-2">Vaccination Date</label>
                        <input type="date" name="vaccination_date" value="{{ \Carbon\Carbon::parse($record->vaccination_date)->format('Y-m-d') }}" required class="w-full bg-slate-950 border border-slate-800 focus:border-cyan-500 rounded-xl px-4 py-3 text-slate-200 text-sm focus:outline-none text-slate-100">
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-sm font-bold text-slate-300 mb-2">Status</label>
                        <select name="status" required class="w-full bg-slate-950 border border-slate-800 focus:border-cyan-500 rounded-xl px-4 py-3 text-slate-200 text-sm focus:outline-none">
                            <option value="Completed" {{ strtolower($record->status) == 'completed' ? 'selected' : '' }} class="bg-slate-900 text-slate-100">Completed</option>
                            <option value="Pending" {{ strtolower($record->status) == 'pending' ? 'selected' : '' }} class="bg-slate-900 text-slate-100">Pending</option>
                            <option value="Scheduled" {{ strtolower($record->status) == 'scheduled' ? 'selected' : '' }} class="bg-slate-900 text-slate-100">Scheduled</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" class="w-full py-4 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-extrabold rounded-2xl shadow-xl shadow-cyan-500/25 transition">
                            Update Vaccination Record
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>