<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-100 tracking-tight">
                👶 Registered Patients (Children)
            </h2>
            <a href="{{ route('patients.create') }}" class="px-5 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold text-sm rounded-xl shadow-lg shadow-cyan-500/20 hover:scale-105 transition">
                + Register New Patient
            </a>
        </div>
    </x-slot>

    <div class="py-8 bg-slate-950 min-h-screen text-slate-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 font-semibold text-sm rounded-xl">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <div class="bg-slate-900 border border-slate-800 rounded-2xl shadow-xl overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-800/60 text-cyan-400 uppercase text-[11px] font-bold tracking-wider border-b border-slate-800">
                            <th class="p-4">#</th>
                            <th class="p-4">Child Name</th>
                            <th class="p-4">Parent / Guardian</th>
                            <th class="p-4">Date of Birth</th>
                            <th class="p-4">Gender</th>
                            <th class="p-4">Contact Number</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60 text-sm text-slate-300">
                        @forelse($patients as $index => $patient)
                            <tr class="hover:bg-slate-800/40 transition">
                                <td class="p-4 text-slate-500 font-semibold">{{ $index + 1 }}</td>
                                <td class="p-4 font-bold text-white">{{ $patient->child_name }}</td>
                                <td class="p-4">{{ $patient->parent_name }}</td>
                                <td class="p-4 text-cyan-300 font-medium">{{ \Carbon\Carbon::parse($patient->date_of_birth)->format('d M, Y') }}</td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 text-xs font-bold rounded-full {{ $patient->gender == 'Male' ? 'bg-blue-500/20 text-blue-400' : 'bg-pink-500/20 text-pink-400' }}">
                                        {{ $patient->gender }}
                                    </span>
                                </td>
                                <td class="p-4 font-mono text-xs text-slate-400">{{ $patient->contact_number }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-8 text-center text-slate-500 font-medium">
                                    No patient registered yet. Click "+ Register New Patient" to add one.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>