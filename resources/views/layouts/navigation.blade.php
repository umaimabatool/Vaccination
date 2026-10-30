<nav class="bg-slate-900 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <!-- Left Side Links -->
            <div class="flex items-center gap-8">
                <a href="{{ route('dashboard') }}" class="text-cyan-400 font-bold text-xl flex items-center gap-2">
                    💉 VaccineCare
                </a>

                <div class="hidden sm:flex space-x-6">
                    <a href="{{ route('dashboard') }}" class="text-sm font-medium text-slate-200 hover:text-cyan-400 transition">
                        Dashboard
                    </a>
                    <a href="{{ route('vaccines.index') }}" class="text-sm font-medium text-slate-400 hover:text-cyan-400 transition">
                        Vaccines
                    </a>
                    <a href="{{ route('patients.index') }}" class="text-sm font-medium text-slate-400 hover:text-cyan-400 transition">
                        Patients
                    </a>
                    <a href="{{ route('records.index') }}" class="text-sm font-medium text-slate-400 hover:text-cyan-400 transition">
                        Vaccination Records
                    </a>
                </div>
            </div>

            <!-- Right Side: Log Out Button -->
            <div class="flex items-center gap-4">
                <span class="text-slate-300 font-semibold text-sm bg-slate-800 px-3 py-1.5 rounded-lg border border-slate-700">
                     {{ Auth::user()->name ?? 'User' }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-4 py-1.5 bg-red-600/20 hover:bg-red-600 text-red-400 hover:text-white border border-red-500/30 text-sm font-semibold rounded-lg transition">
                        Log Out 
                    </button>
                </form>
            </div>

        </div>
    </div>
</nav>