<x-guest-layout>
    <div class="min-h-screen bg-slate-950 flex flex-col justify-center items-center py-6 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-6 bg-slate-900 border border-slate-800 p-8 rounded-2xl shadow-2xl">
            
            <div class="text-center">
                <h1 class="text-3xl font-extrabold text-cyan-400 flex justify-center items-center gap-2">
                    💉 VaccineCare
                </h1>
                <h2 class="mt-2 text-xl font-bold text-white">Create Account</h2>
                <p class="text-xs text-slate-400 mt-1">Register to start managing portal records</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-1">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus 
                           class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-500">
                    @error('name')
                        <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email Address -->
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required 
                           class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-500">
                    @error('email')
                        <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-1">Password</label>
                    <input type="password" name="password" required 
                           class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-500">
                    @error('password')
                        <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required 
                           class="w-full px-4 py-2.5 bg-slate-800 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-500">
                    @error('password_confirmation')
                        <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-3 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl shadow-lg shadow-cyan-500/20 transition">
                        Register Account
                    </button>
                </div>
            </form>

            <p class="text-center text-xs text-slate-400">
                Already registered? 
                <a href="{{ route('login') }}" class="text-cyan-400 font-semibold hover:underline">Log in here</a>
            </p>
        </div>
    </div>
</x-guest-layout>