<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VaccineCare - Child Immunization & Health Protection System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 selection:bg-cyan-500 selection:text-slate-950">

    <!-- Header Navigation -->
    <header class="border-b border-slate-800/80 bg-slate-900/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center shadow-lg shadow-cyan-500/30">
                    <span class="text-xl">💉</span>
                </div>
                <span class="font-black text-2xl tracking-wider text-white">Vaccine<span class="text-cyan-400">Care</span></span>
            </a>

            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-300">
                <a href="#features" class="hover:text-cyan-400 transition cursor-pointer">Features</a>
                <a href="#services" class="hover:text-cyan-400 transition cursor-pointer">Services</a>
                <a href="#about" class="hover:text-cyan-400 transition cursor-pointer">About System</a>
            </nav>

            <div class="flex items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-6 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold rounded-xl transition shadow-lg shadow-cyan-500/25">Dashboard &rarr;</a>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2.5 bg-slate-900 hover:bg-slate-800 text-slate-300 font-semibold rounded-xl transition border border-slate-800">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-5 py-2.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl shadow-lg shadow-cyan-500/20 transition">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Side Typography Content -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-cyan-500/10 border border-cyan-500/30 rounded-full text-xs font-bold text-cyan-400 shadow-md">
                        <span class="w-2.5 h-2.5 rounded-full bg-cyan-400 animate-pulse"></span>
                        Shielding Children From Harmful Pathogens & Germs
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight">
                        Building Strong Immunity Against <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-teal-300 to-blue-500">Deadly Diseases</span>
                    </h1>

                    <p class="text-slate-400 text-base sm:text-lg leading-relaxed">
                        An advanced clinical portal designed to safeguard children from infectious viruses and germs by organizing complete vaccination records, dose schedules, and stock levels seamlessly.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-extrabold rounded-2xl shadow-xl shadow-cyan-500/25 transition text-base">
                                    Go To Dashboard &rarr;
                                </a>
                            @else
                                <a href="{{ route('register') }}" class="px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-extrabold rounded-2xl shadow-xl shadow-cyan-500/25 transition text-base">
                                    Get Started &rarr;
                                </a>
                                <a href="{{ route('login') }}" class="px-8 py-4 bg-slate-900 hover:bg-slate-800 text-slate-300 font-bold rounded-2xl border border-slate-800 transition text-base">
                                    Sign In
                                </a>
                            @endauth
                        @endif
                    </div>

                    <!-- Metric Badges -->
                    <div class="pt-6 grid grid-cols-3 gap-6 border-t border-slate-800/80">
                        <div>
                            <h4 class="text-2xl font-black text-cyan-400">100%</h4>
                            <p class="text-slate-500 text-xs mt-0.5">Virus Defense Log</p>
                        </div>
                        <div>
                            <h4 class="text-2xl font-black text-blue-400">Zero</h4>
                            <p class="text-slate-500 text-xs mt-0.5">Delayed Doses</p>
                        </div>
                        <div>
                            <h4 class="text-2xl font-black text-emerald-400">24/7</h4>
                            <p class="text-slate-500 text-xs mt-0.5">System Access</p>
                        </div>
                    </div>
                </div>

                <!-- Right Side Virus/Germs Protection Graphic -->
                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-3xl overflow-hidden border border-slate-800 shadow-2xl bg-slate-900 group">
                        <img src="https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?auto=format&fit=crop&q=80&w=900" 
                             alt="Virus Germs Pathogens Protection Healthcare" 
                             class="w-full h-[450px] object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                        
                        <div class="absolute bottom-5 left-5 right-5 bg-slate-900/90 border border-slate-800 backdrop-blur-md p-4 rounded-2xl shadow-xl flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xl shrink-0">🛡️</div>
                            <div>
                                <h4 class="text-sm font-bold text-white">Active Disease Shield</h4>
                                <p class="text-xs text-slate-400">Preventing infections with early child immunization.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-slate-900/40 border-t border-slate-800/80">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-extrabold text-white">System Features</h2>
                <p class="text-slate-400 text-sm mt-2">Core capabilities built inside VaccineCare portal.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <a href="{{ route('patients.index') }}" class="bg-slate-900 border border-slate-800 p-8 rounded-2xl shadow-lg hover:border-cyan-500/60 hover:-translate-y-1 transition duration-200 group block">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition">🩺</div>
                    <h3 class="text-lg font-bold text-white mb-2 flex items-center justify-between">
                        <span>Patient Records</span>
                        <span class="text-cyan-400 opacity-0 group-hover:opacity-100 transition">&rarr;</span>
                    </h3>
                    <p class="text-slate-400 text-sm">Register children with guardian details and view instant history.</p>
                </a>

                <a href="{{ route('vaccines.index') }}" class="bg-slate-900 border border-slate-800 p-8 rounded-2xl shadow-lg hover:border-blue-500/60 hover:-translate-y-1 transition duration-200 group block">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/10 text-blue-400 border border-blue-500/20 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition">🧪</div>
                    <h3 class="text-lg font-bold text-white mb-2 flex items-center justify-between">
                        <span>Vaccine Inventory</span>
                        <span class="text-blue-400 opacity-0 group-hover:opacity-100 transition">&rarr;</span>
                    </h3>
                    <p class="text-slate-400 text-sm">Monitor vaccine stocks, doses, and storage guidelines easily.</p>
                </a>

                <a href="{{ route('records.index') }}" class="bg-slate-900 border border-slate-800 p-8 rounded-2xl shadow-lg hover:border-emerald-500/60 hover:-translate-y-1 transition duration-200 group block">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition">📋</div>
                    <h3 class="text-lg font-bold text-white mb-2 flex items-center justify-between">
                        <span>Vaccination Logs</span>
                        <span class="text-emerald-400 opacity-0 group-hover:opacity-100 transition">&rarr;</span>
                    </h3>
                    <p class="text-slate-400 text-sm">Assign vaccines, log dates, and track status with instant CRUD actions.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-slate-950 border-t border-slate-800/80">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-extrabold text-white">Healthcare Services</h2>
                <p class="text-slate-400 text-sm mt-2">Promoting child wellness through digital tracking.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl flex items-start gap-5 shadow-lg">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center text-3xl shrink-0">🛡️</div>
                    <div>
                        <h4 class="font-bold text-white text-lg">Schedule Protection</h4>
                        <p class="text-slate-400 text-sm mt-2 leading-relaxed">Timely immunization logs to ensure no vaccination dose is skipped, providing complete protection for newborn babies.</p>
                    </div>
                </div>

                <div class="bg-slate-900 border border-slate-800 p-8 rounded-2xl flex items-start gap-5 shadow-lg">
                    <div class="w-14 h-14 rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-3xl shrink-0">💻</div>
                    <div>
                        <h4 class="font-bold text-white text-lg">Centralized Management</h4>
                        <p class="text-slate-400 text-sm mt-2 leading-relaxed">Admin access to manage patients, vaccines, and vaccination dates efficiently in one secure database portal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About System Section -->
    <section id="about" class="py-20 bg-slate-900/60 border-t border-slate-800/80 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-2">
                <span class="px-4 py-1.5 bg-gradient-to-r from-cyan-500/20 to-blue-500/20 text-cyan-300 border border-cyan-500/30 text-xs font-black rounded-full uppercase tracking-wider">
                    eProject Technical Specifications
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-white pt-3">About VaccineCare Portal</h2>
                <p class="text-slate-400 text-sm">Engineered for modern pediatric clinical operations.</p>
            </div>

            <!-- Stylized Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Card 1: Core Objective -->
                <div class="relative group bg-gradient-to-b from-slate-900 to-slate-950 border border-slate-800/90 hover:border-cyan-500/50 p-8 rounded-3xl shadow-2xl transition-all duration-300 hover:-translate-y-1.5">
                    <div class="absolute inset-0 bg-cyan-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-cyan-500/20 to-cyan-500/5 border border-cyan-500/30 text-cyan-400 flex items-center justify-center text-2xl shadow-lg shadow-cyan-500/10">
                            🎯
                        </div>
                        <h3 class="text-xl font-extrabold text-white">Core Objective</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            To eliminate manual paperwork in pediatric clinics by maintaining digital records of newborn children and their mandatory immunization logs.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Tech Stack -->
                <div class="relative group bg-gradient-to-b from-slate-900 to-slate-950 border border-slate-800/90 hover:border-blue-500/50 p-8 rounded-3xl shadow-2xl transition-all duration-300 hover:-translate-y-1.5">
                    <div class="absolute inset-0 bg-blue-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-blue-500/20 to-blue-500/5 border border-blue-500/30 text-blue-400 flex items-center justify-center text-2xl shadow-lg shadow-blue-500/10">
                            ⚙️
                        </div>
                        <h3 class="text-xl font-extrabold text-white">Technology Stack</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Built using industry-standard modern web frameworks for robust reliability:
                        </p>
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="px-3.5 py-1.5 bg-slate-900 text-cyan-300 border border-cyan-500/30 rounded-xl text-xs font-bold shadow-sm">Laravel 11</span>
                            <span class="px-3.5 py-1.5 bg-slate-900 text-blue-300 border border-blue-500/30 rounded-xl text-xs font-bold shadow-sm">Tailwind CSS</span>
                            <span class="px-3.5 py-1.5 bg-slate-900 text-emerald-300 border border-emerald-500/30 rounded-xl text-xs font-bold shadow-sm">MySQL DB</span>
                            <span class="px-3.5 py-1.5 bg-slate-900 text-purple-300 border border-purple-500/30 rounded-xl text-xs font-bold shadow-sm">Breeze Auth</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Key Benefits -->
                <div class="relative group bg-gradient-to-b from-slate-900 to-slate-950 border border-slate-800/90 hover:border-emerald-500/50 p-8 rounded-3xl shadow-2xl transition-all duration-300 hover:-translate-y-1.5">
                    <div class="absolute inset-0 bg-emerald-500/5 rounded-3xl opacity-0 group-hover:opacity-100 transition duration-300"></div>
                    <div class="relative space-y-5">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-emerald-500/20 to-emerald-500/5 border border-emerald-500/30 text-emerald-400 flex items-center justify-center text-2xl shadow-lg shadow-emerald-500/10">
                            ✨
                        </div>
                        <h3 class="text-xl font-extrabold text-white">System Benefits</h3>
                        <ul class="space-y-3 text-slate-400 text-sm">
                            <li class="flex items-center gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 flex items-center justify-center text-xs font-bold shrink-0">✓</span>
                                <span>Real-time record lookup</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 flex items-center justify-center text-xs font-bold shrink-0">✓</span>
                                <span>Vaccine stock inventory monitoring</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 flex items-center justify-center text-xs font-bold shrink-0">✓</span>
                                <span>Secure authentication & CRUD logs</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-800/80 py-8 bg-slate-950 text-center text-slate-500 text-sm">
        <p>&copy; 2026 VaccineCare eProject. All rights reserved.</p>
    </footer>

</body>
</html>