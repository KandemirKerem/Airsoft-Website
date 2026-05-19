<!-- Header -->
<header class="border-b border-gray-800 bg-[#16181a] z-20 sticky top-0">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="anasayfa.html" class="flex-shrink-0 flex items-center gap-2 cursor-pointer hover:opacity-80 transition-opacity">
                <div class="text-accent text-2xl flex items-center justify-center">
                    <i class="fa-solid fa-crosshairs"></i>
                </div>
                <span class="font-bold text-xl tracking-tight">Airsoft<span class="text-accent">Satis</span></span>
            </a>

            <x-partials.navbar></x-partials.navbar>

            <!-- Right Actions -->
            <div class="flex items-center gap-3">
                <button class="text-gray-400 hover:text-white transition-colors hidden lg:block mr-2">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <div class="hidden md:flex items-center gap-3 border-l border-gray-700 pl-3">
                    <a href="#" class="text-gray-300 hover:text-white text-sm font-medium transition-colors">Giriş Yap</a>
                    <a href="#" class="text-white bg-gray-800 hover:bg-gray-700 px-3 py-1.5 rounded-lg text-sm font-medium transition-colors border border-gray-700">Kayıt Ol</a>
                </div>
                <a href="#" class="bg-[#4d6b38] hover:bg-priceBg text-white px-4 py-1.5 rounded-lg flex items-center gap-2 text-sm font-medium shadow transition-colors ml-1">
                    <i class="fa-solid fa-plus text-xs"></i> <span class="hidden sm:inline">İlan Ver</span>
                </a>
            </div>
        </div>
    </div>
</header>
