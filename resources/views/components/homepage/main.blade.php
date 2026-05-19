<!-- Main Content -->
<main class="flex-grow z-10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Hero Search Section -->
        <div class="bg-hero border-2 border-heroBorder rounded-xl p-10 mb-10 relative overflow-hidden flex flex-col items-center text-center shadow-2xl">
            <!-- Decorative Elements inside hero -->
            <div class="absolute top-0 left-0 w-full h-full hero-pattern"></div>
            <div class="absolute top-4 left-6 text-accent text-3xl opacity-60 font-bold tracking-tighter">//</div>
            <div class="absolute bottom-4 right-6 text-accent text-3xl opacity-60 font-bold tracking-tighter">//</div>

            <h1 class="text-4xl md:text-5xl font-black mb-3 relative z-10 tracking-tight">
                Airsoft<span class="text-accent">Satis</span>
            </h1>
            <p class="text-gray-400 text-xs md:text-sm font-bold tracking-[0.2em] mb-8 relative z-10">TÜRKİYE'NİN HOBİ VE EKİPMAN BULUŞMA NOKTASI</p>

            <div class="w-full max-w-2xl relative z-10 flex flex-col gap-4">
                <div class="relative flex items-center">
                    <input type="text" placeholder="İlanlarda Ara..." class="w-full bg-inputBg border border-gray-700 rounded-lg py-3 pl-4 pr-12 text-white focus:outline-none focus:border-accent transition-colors placeholder-gray-500 shadow-inner">
                    <button class="absolute right-2 bg-btnBg hover:bg-priceBg text-white rounded-md w-8 h-8 flex items-center justify-center transition-colors">
                        <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    </button>
                </div>

                <div class="flex flex-wrap justify-center gap-2 mt-1">
                    <button class="bg-[#4d6b38] text-white px-4 py-1.5 rounded text-sm font-medium shadow transition-colors hover:bg-priceBg">Tüm İlanlar</button>
                    <button class="bg-transparent border border-gray-600 text-gray-300 hover:border-accent hover:text-white px-4 py-1.5 rounded text-sm font-medium transition-colors">Elektrikli (AEG)</button>
                    <button class="bg-transparent border border-gray-600 text-gray-300 hover:border-accent hover:text-white px-4 py-1.5 rounded text-sm font-medium transition-colors">Gazlı (GBB)</button>
                    <button class="bg-transparent border border-gray-600 text-gray-300 hover:border-accent hover:text-white px-4 py-1.5 rounded text-sm font-medium transition-colors">Ekipman</button>
                    <button class="bg-transparent border border-gray-600 text-gray-300 hover:border-accent hover:text-white px-4 py-1.5 rounded text-sm font-medium transition-colors">Yedek Parça</button>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- Product 1 -->
            <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group">
                <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1595590424283-b8f1784cb2c8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="CYMA CM.030" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">
                        ₺1.850
                    </div>
                </div>
                <div class="px-1">
                    <h3 class="text-white font-semibold text-base mb-1 truncate" title="CYMA CM.030 AEP/ACMP - Az Kullanılmış">CYMA CM.030 AEP/ACMP - Az Kullanılmış</h3>
                    <p class="text-gray-400 text-xs mb-4">FPS: 240 | İstanbul | 12 Gün Önce</p>
                    <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group">
                <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1584041300085-f5f400780287?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="G&G M4" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">
                        ₺1.750
                    </div>
                </div>
                <div class="px-1">
                    <h3 class="text-white font-semibold text-base mb-1 truncate" title="G&G M4">G&G M4</h3>
                    <p class="text-gray-400 text-xs mb-4">FPS: 240 | İstanbul | 12 Gün Önce</p>
                    <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group">
                <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1616422285623-13ff0162193c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="WE Glock 17" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">
                        ₺1.350
                    </div>
                </div>
                <div class="px-1">
                    <h3 class="text-white font-semibold text-base mb-1 truncate" title="WE Glock 17">WE Glock 17</h3>
                    <p class="text-gray-400 text-xs mb-4">FPS: 240 | İstanbul | 12 Gün Önce</p>
                    <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group">
                <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544839843-085e68b376c6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Vest" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">
                        ₺1.250
                    </div>
                </div>
                <div class="px-1">
                    <h3 class="text-white font-semibold text-base mb-1 truncate" title="Vest">Vest</h3>
                    <p class="text-gray-400 text-xs mb-4">FPS: 240 | İstanbul | 12 Gün Önce</p>
                    <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group">
                <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1583307584107-7ce854ca6d50?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Magazine" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">
                        ₺1.250
                    </div>
                </div>
                <div class="px-1">
                    <h3 class="text-white font-semibold text-base mb-1 truncate" title="Magazine">Magazine</h3>
                    <p class="text-gray-400 text-xs mb-4">FPS: 240 | İstanbul | 12 Gün Önce</p>
                    <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group">
                <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1636136706935-7798dc5ab26d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Helmets" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">
                        ₺1.350
                    </div>
                </div>
                <div class="px-1">
                    <h3 class="text-white font-semibold text-base mb-1 truncate" title="Helmets">Helmets</h3>
                    <p class="text-gray-400 text-xs mb-4">FPS: 240 | İstanbul | 12 Gün Önce</p>
                    <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                </div>
            </div>
        </div>
    </div>
</main>
