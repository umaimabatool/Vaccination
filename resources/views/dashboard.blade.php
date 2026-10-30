<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-cyan-400 leading-tight flex items-center gap-2">
            <span>📊</span> {{ __('Healthcare System Analytics Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <!-- Welcome Banner with Image Gradient -->
            <div class="relative overflow-hidden bg-gradient-to-r from-slate-900 via-slate-800 to-cyan-950 border border-slate-800 shadow-2xl rounded-2xl p-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6 z-10 relative">
                    <div class="space-y-2">
                        <span class="px-3 py-1 bg-cyan-500/10 text-cyan-400 border border-cyan-500/30 text-xs font-semibold rounded-full uppercase tracking-wider">
                            VaccineCare Portal v1.0
                        </span>
                        <h3 class="text-3xl font-extrabold text-white">Welcome back, <span class="text-cyan-400">{{ Auth::user()->name }}</span>! 👋</h3>
                        <p class="text-slate-400 text-sm max-w-xl">
                            Real-time child immunization monitoring, vaccine stock tracking, and automated appointment logs.
                        </p>
                    </div>
                    <div class="flex gap-3">
                        <a href="{{ route('records.create') }}" class="px-5 py-3 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl shadow-lg shadow-cyan-500/20 transition flex items-center gap-2">
                            <span>➕</span> Record Vaccine
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stats Overview Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Total Patients</p>
                        <h4 class="text-3xl font-black text-cyan-400 mt-2">1</h4>
                        <span class="text-xs text-emerald-400 font-semibold mt-1 inline-block">Registered Children</span>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-2xl">
                        👶
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Available Vaccines</p>
                        <h4 class="text-3xl font-black text-blue-400 mt-2">3</h4>
                        <span class="text-xs text-blue-400 font-semibold mt-1 inline-block">In Stock</span>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-2xl">
                        💉
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Vaccinated Dose</p>
                        <h4 class="text-3xl font-black text-emerald-400 mt-2">1</h4>
                        <span class="text-xs text-emerald-400 font-semibold mt-1 inline-block">Completed</span>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-2xl">
                        ✅
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl shadow-xl flex items-center justify-between">
                    <div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Upcoming Doses</p>
                        <h4 class="text-3xl font-black text-amber-400 mt-2">0</h4>
                        <span class="text-xs text-amber-400 font-semibold mt-1 inline-block">Scheduled</span>
                    </div>
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-2xl">
                        ⏳
                    </div>
                </div>
            </div>

            <!-- Quick Action Banners -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('patients.index') }}" class="bg-slate-900 border border-slate-800 p-6 rounded-2xl hover:border-cyan-500/50 transition group">
                    <div class="text-cyan-400 font-bold text-lg mb-1 group-hover:translate-x-1 transition">👶 Manage Patients &rarr;</div>
                    <p class="text-slate-400 text-xs">Add new newborns, view child details and age profiles.</p>
                </a>
                <a href="{{ route('vaccines.index') }}" class="bg-slate-900 border border-slate-800 p-6 rounded-2xl hover:border-blue-500/50 transition group">
                    <div class="text-blue-400 font-bold text-lg mb-1 group-hover:translate-x-1 transition">💉 Vaccine Inventory &rarr;</div>
                    <p class="text-slate-400 text-xs">Check required dosage guidelines and available vaccine types.</p>
                </a>
                <a href="{{ route('records.index') }}" class="bg-slate-900 border border-slate-800 p-6 rounded-2xl hover:border-emerald-500/50 transition group">
                    <div class="text-emerald-400 font-bold text-lg mb-1 group-hover:translate-x-1 transition">📋 Vaccination Logs &rarr;</div>
                    <p class="text-slate-400 text-xs">View complete history logs with status updates and dates.</p>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>