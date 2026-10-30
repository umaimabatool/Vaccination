<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-cyan-400 leading-tight">
            {{ __('Record Vaccination') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl shadow-xl">
                <form action="{{ route('records.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Select Patient (Child)</label>
                        <select name="patient_id" required class="w-full bg-slate-950 border border-slate-800 rounded-lg text-slate-200 focus:border-cyan-400 focus:ring-cyan-400 p-3">
                            <option value="">-- Choose Patient --</option>
                            @foreach($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->child_name }} (Parent: {{ $patient->parent_name }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Select Vaccine</label>
                        <select name="vaccine_id" required class="w-full bg-slate-950 border border-slate-800 rounded-lg text-slate-200 focus:border-cyan-400 focus:ring-cyan-400 p-3">
                            <option value="">-- Choose Vaccine --</option>
                            @foreach($vaccines as $vaccine)
                                <option value="{{ $vaccine->id }}">{{ $vaccine->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Vaccination Date</label>
                        <input type="date" name="vaccination_date" required class="w-full bg-slate-950 border border-slate-800 rounded-lg text-slate-200 focus:border-cyan-400 focus:ring-cyan-400 p-3">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Status</label>
                        <select name="status" required class="w-full bg-slate-950 border border-slate-800 rounded-lg text-slate-200 focus:border-cyan-400 focus:ring-cyan-400 p-3">
                            <option value="Vaccinated">Vaccinated</option>
                            <option value="Scheduled">Scheduled</option>
                        </select>
                    </div>

                    <div class="flex justify-end gap-4 pt-4">
                        <a href="{{ route('records.index') }}" class="px-5 py-2.5 bg-slate-800 hover:bg-slate-700 text-slate-300 rounded-lg font-semibold transition">Cancel</a>
                        <button type="submit" class="px-5 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold rounded-lg shadow-lg shadow-cyan-500/20 transition">Save Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>