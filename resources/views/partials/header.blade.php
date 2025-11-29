<nav class="sticky top-0 z-50 bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 dark:from-blue-900 dark:via-blue-800 dark:to-blue-900 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo & Brand -->
            <a href="/" class="flex items-center gap-3 text-white hover:opacity-90 transition">
                <img src="{{ asset('images/logo_unib.png') }}" 
                     alt="Logo Universitas Bengkulu" 
                     class="h-12 w-auto">
                <div class="hidden sm:block">
                    <div class="text-sm font-bold tracking-wide">DOKTOR HUKUM</div>
                    <div class="text-xs opacity-90">Universitas Bengkulu</div>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-1">
                <a href="/" class="px-4 py-2 text-white font-semibold rounded-lg hover:bg-white/20 transition">
                    Home
                </a>
                <div class="relative group">
                    <button class="px-4 py-2 text-white font-semibold rounded-lg hover:bg-white/20 transition flex items-center gap-1">
                        Profil
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-48 bg-white dark:bg-neutral-800 text-neutral-900 dark:text-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 first:rounded-t-lg">Sejarah</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700">Visi & Misi</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700">Tujuan & Strategi</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700">Struktur Organisasi</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 last:rounded-b-lg">Dosen</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="px-4 py-2 text-white font-semibold rounded-lg hover:bg-white/20 transition flex items-center gap-1">
                        Akademik
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-48 bg-white dark:bg-neutral-800 text-neutral-900 dark:text-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 first:rounded-t-lg">Kurikulum</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700">Kalender Akademik</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 last:rounded-b-lg">Tahapan Studi</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="px-4 py-2 text-white font-semibold rounded-lg hover:bg-white/20 transition flex items-center gap-1">
                        PPM & UPM
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-48 bg-white dark:bg-neutral-800 text-neutral-900 dark:text-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 first:rounded-t-lg">Penelitian</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 last:rounded-b-lg">Pengabdian</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="px-4 py-2 text-white font-semibold rounded-lg hover:bg-white/20 transition flex items-center gap-1">
                        Registrasi
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-48 bg-white dark:bg-neutral-800 text-neutral-900 dark:text-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 first:rounded-t-lg">Pendaftaran</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700">MABA</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 last:rounded-b-lg">Alumni</a>
                    </div>
                </div>
                <div class="relative group">
                    <button class="px-4 py-2 text-white font-semibold rounded-lg hover:bg-white/20 transition flex items-center gap-1">
                        Info
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-0 w-48 bg-white dark:bg-neutral-800 text-neutral-900 dark:text-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 first:rounded-t-lg">Pusat Informasi</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700">SATGAS PPKT</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-neutral-700 last:rounded-b-lg">Kontak</a>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-white hover:opacity-80 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>
