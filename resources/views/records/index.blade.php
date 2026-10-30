<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-xl text-slate-100 leading-tight flex items-center gap-2">
                <span>📋</span> {{ __('Vaccination Records') }}
            </h2>
            <a href="{{ route('records.create') }}" class="px-5 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold rounded-xl shadow-lg shadow-cyan-500/20 transition text-sm">
                + Add New Record
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-950 min-h-screen text-slate-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Flash Success Message -->
            @if (session('success'))
                <div class="p-4 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 rounded-2xl text-sm font-semibold flex items-center justify-between shadow-lg">
                    <span>✓ {{ session('success') }}</span>
                    <button onclick="this.parentElement.remove()" class="text-emerald-400 font-bold hover:text-emerald-200">&times;</button>
                </div>
            @endif

            <div class="bg-slate-900 border border-slate-800 shadow-2xl rounded-3xl overflow-hidden">
                <div class="p-6 border-b border-slate-800/80 flex justify-between items-center">
                    <h3 class="font-extrabold text-lg text-white">All Vaccination Logs</h3>
                    <span class="text-xs text-slate-400 bg-slate-800 px-3 py-1 rounded-full border border-slate-700 font-medium">
                        Total Records: {{ $records->count() }}
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-300">
                        <thead class="bg-slate-950 text-slate-400 text-xs uppercase font-extrabold border-b border-slate-800">
                            <tr>
                                <th class="px-6 py-4">ID</th>
                                <th class="px-6 py-4">Child / Patient</th>
                                <th class="px-6 py-4">Vaccine Name</th>
                                <th class="px-6 py-4">Vaccination Date</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60">
                            @forelse ($records as $record)
                                <tr class="hover:bg-slate-800/40 transition">
                                    <td class="px-6 py-4 font-mono text-xs text-slate-500">#{{ $record->id }}</td>
                                    
                                    <!-- Child Info -->
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 flex items-center justify-center font-bold text-xs">
                                                {{ strtoupper(substr($record->patient->name ?? 'P', 0, 1)) }}
                                            </div>
                                            <div>
                                                <p class="font-bold text-white">{{ $record->patient->name ?? 'N/A' }}</p>
                                                <p class="text-[11px] text-slate-400">Guardian: {{ $record->patient->guardian_name ?? 'N/A' }}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Vaccine Info -->
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-slate-200">🧪 {{ $record->vaccine->name ?? 'N/A' }}</span>
                                    </td>

                                    <!-- Date -->
                                    <td class="px-6 py-4 text-slate-300 font-medium">
                                        📅 {{ \Carbon\Carbon::parse($record->vaccination_date)->format('M d, Y') }}
                                    </td>

                                    <!-- Status Badge -->
                                    <td class="px-6 py-4">
                                        @if(strtolower($record->status) === 'completed')
                                            <span class="px-3 py-1 bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 rounded-full text-xs font-bold">
                                                ✓ Completed
                                            </span>
                                        @elseif(strtolower($record->status) === 'pending')
                                            <span class="px-3 py-1 bg-amber-500/10 text-amber-400 border border-amber-500/30 rounded-full text-xs font-bold">
                                                ⏳ Pending
                                            </span>
                                        @else
                                            <span class="px-3 py-1 bg-blue-500/10 text-blue-400 border border-blue-500/30 rounded-full text-xs font-bold">
                                                📌 {{ ucfirst($record->status) }}
                                            </span>
                                        @endif
                                    </td>

                                    <!-- Edit and Delete Actions -->
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <!-- Edit Button -->
                                            <a href="{{ route('records.edit', $record->id) }}" class="px-3 py-1.5 bg-blue-500/10 hover:bg-blue-500/20 text-blue-400 border border-blue-500/30 rounded-xl text-xs font-bold transition flex items-center gap-1">
                                                ✏️ Edit
                                            </a>

                                            <!-- Delete Button -->
                                            <form action="{{ route('records.destroy', $record->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this vaccination record?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-1.5 bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/30 rounded-xl text-xs font-bold transition flex items-center gap-1">
                                                    🗑️ Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center text-slate-500 text-sm">
                                        No vaccination records found. Click <a href="{{ route('records.create') }}" class="text-cyan-400 underline font-bold">Add New Record</a> to create one.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>