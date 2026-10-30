<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-100 tracking-tight">
            ➕ Register Child Patient
        </h2>
    </x-slot>

    <div class="py-8 bg-slate-950 min-h-screen text-slate-100">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl shadow-xl">
                
                <form action="{{ route('patients.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-400 mb-2">Child Full Name</label>
                            <input type="text" name="child_name" required placeholder="e.g. Ali Ahmed" 
                                   class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white focus:border-cyan-500 focus:outline-none text-sm">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-400 mb-2">Parent / Guardian Name</label>
                            <input type="text" name="parent_name" required placeholder="e.g. Usman Ahmed" 
                                   class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white focus:border-cyan-500 focus:outline-none text-sm">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-400 mb-2">Date of Birth</label>
                            <input type="date" name="date_of_birth" required 
                                   class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white focus:border-cyan-500 focus:outline-none text-sm">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-400 mb-2">Gender</label>
                            <select name="gender" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white focus:border-cyan-500 focus:outline-none text-sm">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-400 mb-2">Contact Number</label>
                        <input type="text" name="contact_number" required placeholder="e.g. 0300-1234567" 
                               class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white focus:border-cyan-500 focus:outline-none text-sm">
                    </div>

                    <div class="flex justify-end gap-3 pt-4 border-t border-slate-800">
                        <a href="{{ route('patients.index') }}" class="px-6 py-3 bg-slate-800 text-slate-300 font-semibold text-sm rounded-xl hover:bg-slate-700 transition">
                            Cancel
                        </a>
                        <button type="submit" class="px-8 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold text-sm rounded-xl shadow-lg shadow-cyan-500/20 hover:scale-105 transition">
                            Save Patient Record
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>