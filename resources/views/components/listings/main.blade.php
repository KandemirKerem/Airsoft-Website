<!-- Main Content -->
<main class="flex-grow z-10">
    <!-- Page Title & Breadcrumb -->
    <div class="bg-[#1b1f1a] border-b border-gray-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex items-center text-sm text-gray-400 mb-2">
                <a href="anasayfa.html" class="hover:text-accent transition-colors">Ana Sayfa</a>
                <span class="mx-2"><i class="fa-solid fa-angle-right text-xs"></i></span>
                <span class="text-gray-200">İlanlar</span>
            </div>
            <h1 class="text-3xl font-bold text-white tracking-tight">Tüm İlanlar</h1>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col lg:flex-row gap-8">

        <!-- Sidebar (Filters) -->
        <aside class="w-full lg:w-1/4 flex-shrink-0">
            <div class="bg-card rounded-xl border border-gray-800 p-5 sticky top-24 shadow-lg">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-bold text-white"><i class="fa-solid fa-filter mr-2 text-accent"></i> Filtreler</h2>
                    <button class="text-xs text-gray-400 hover:text-accent transition-colors underline">Temizle</button>
                </div>

                <!-- Category Filter -->
                <div class="mb-6">
                    <h3 class="font-semibold text-gray-300 mb-3 text-sm uppercase tracking-wider border-b border-gray-700 pb-2">Kategoriler</h3>
                    <div class="space-y-3 max-h-48 overflow-y-auto pr-2">
                        <label class="flex items-center justify-between group cursor-pointer text-sm text-gray-400 hover:text-white transition-colors">
                            <div class="flex items-center gap-2">
                                <input type="checkbox" class="custom-checkbox" checked>
                                <span>Tüm İlanlar</span>
                            </div>
                            <span class="text-xs bg-gray-800 rounded-full px-2 py-0.5 group-hover:bg-gray-700 transition-colors">142</span>
                        </label>
                        <label class="flex items-center justify-between group cursor-pointer text-sm text-gray-400 hover:text-white transition-colors">
                            <div class="flex items-center gap-2">
                                <input type="checkbox" class="custom-checkbox">
                                <span>Elektrikli (AEG)</span>
                            </div>
                            <span class="text-xs bg-gray-800 rounded-full px-2 py-0.5 group-hover:bg-gray-700 transition-colors">45</span>
                        </label>
                        <label class="flex items-center justify-between group cursor-pointer text-sm text-gray-400 hover:text-white transition-colors">
                            <div class="flex items-center gap-2">
                                <input type="checkbox" class="custom-checkbox">
                                <span>Gazlı (GBB)</span>
                            </div>
                            <span class="text-xs bg-gray-800 rounded-full px-2 py-0.5 group-hover:bg-gray-700 transition-colors">38</span>
                        </label>
                        <label class="flex items-center justify-between group cursor-pointer text-sm text-gray-400 hover:text-white transition-colors">
                            <div class="flex items-center gap-2">
                                <input type="checkbox" class="custom-checkbox">
                                <span>Kurmalı (Spring)</span>
                            </div>
                            <span class="text-xs bg-gray-800 rounded-full px-2 py-0.5 group-hover:bg-gray-700 transition-colors">12</span>
                        </label>
                        <label class="flex items-center justify-between group cursor-pointer text-sm text-gray-400 hover:text-white transition-colors">
                            <div class="flex items-center gap-2">
                                <input type="checkbox" class="custom-checkbox">
                                <span>Ekipman & Giyim</span>
                            </div>
                            <span class="text-xs bg-gray-800 rounded-full px-2 py-0.5 group-hover:bg-gray-700 transition-colors">29</span>
                        </label>
                        <label class="flex items-center justify-between group cursor-pointer text-sm text-gray-400 hover:text-white transition-colors">
                            <div class="flex items-center gap-2">
                                <input type="checkbox" class="custom-checkbox">
                                <span>Yedek Parça</span>
                            </div>
                            <span class="text-xs bg-gray-800 rounded-full px-2 py-0.5 group-hover:bg-gray-700 transition-colors">18</span>
                        </label>
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="mb-6">
                    <h3 class="font-semibold text-gray-300 mb-3 text-sm uppercase tracking-wider border-b border-gray-700 pb-2">Fiyat Aralığı</h3>
                    <div class="flex items-center gap-2">
                        <div class="relative w-full">
                            <span class="absolute left-2 top-1.5 text-gray-500 text-sm">₺</span>
                            <input type="number" placeholder="Min" class="w-full bg-inputBg border border-gray-700 rounded-md py-1.5 pl-6 pr-2 text-sm text-white focus:outline-none focus:border-accent transition-colors">
                        </div>
                        <span class="text-gray-500">-</span>
                        <div class="relative w-full">
                            <span class="absolute left-2 top-1.5 text-gray-500 text-sm">₺</span>
                            <input type="number" placeholder="Max" class="w-full bg-inputBg border border-gray-700 rounded-md py-1.5 pl-6 pr-2 text-sm text-white focus:outline-none focus:border-accent transition-colors">
                        </div>
                    </div>
                </div>

                <!-- Condition Filter -->
                <div class="mb-6">
                    <h3 class="font-semibold text-gray-300 mb-3 text-sm uppercase tracking-wider border-b border-gray-700 pb-2">Durum</h3>
                    <div class="space-y-3">
                        <label class="flex items-center gap-2 cursor-pointer text-sm text-gray-400 hover:text-white transition-colors">
                            <input type="checkbox" class="custom-checkbox">
                            <span>Sıfır</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm text-gray-400 hover:text-white transition-colors">
                            <input type="checkbox" class="custom-checkbox">
                            <span>İkinci El (Az Kullanılmış)</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer text-sm text-gray-400 hover:text-white transition-colors">
                            <input type="checkbox" class="custom-checkbox">
                            <span>İkinci El (Kullanılmış)</span>
                        </label>
                    </div>
                </div>

                <!-- Location Filter -->
                <div class="mb-6">
                    <h3 class="font-semibold text-gray-300 mb-3 text-sm uppercase tracking-wider border-b border-gray-700 pb-2">Şehir</h3>
                    <div class="relative">
                        <select class="w-full bg-inputBg border border-gray-700 rounded-md py-2 px-3 text-sm text-gray-300 focus:outline-none focus:border-accent transition-colors appearance-none cursor-pointer">
                            <option value="">Tüm Şehirler</option>
                            <option value="istanbul">İstanbul</option>
                            <option value="ankara">Ankara</option>
                            <option value="izmir">İzmir</option>
                            <option value="antalya">Antalya</option>
                            <option value="bursa">Bursa</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-3 top-3 text-gray-500 text-xs pointer-events-none"></i>
                    </div>
                </div>

                <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow flex justify-center items-center gap-2 mt-4">
                    <i class="fa-solid fa-check"></i> Sonuçları Göster
                </button>
            </div>
        </aside>

        <!-- Product Results Area -->
        <div class="w-full lg:w-3/4 flex flex-col">
            <!-- Toolbar -->
            <div class="bg-card rounded-xl border border-gray-800 p-3 mb-6 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
                <p class="text-gray-400 text-sm">Toplam <span class="text-white font-bold">142</span> ilan bulundu.</p>

                <div class="flex items-center gap-4">
                    <div class="hidden sm:flex items-center gap-2 bg-inputBg rounded-md p-1 border border-gray-700">
                        <button class="w-8 h-8 rounded bg-gray-700 text-white flex items-center justify-center transition-colors"><i class="fa-solid fa-border-all"></i></button>
                        <button class="w-8 h-8 rounded hover:bg-gray-700 text-gray-400 hover:text-white flex items-center justify-center transition-colors"><i class="fa-solid fa-list"></i></button>
                    </div>

                    <div class="relative w-full sm:w-auto">
                        <select class="w-full appearance-none bg-inputBg border border-gray-700 rounded-md py-1.5 pl-3 pr-8 text-sm text-gray-300 focus:outline-none focus:border-accent transition-colors cursor-pointer">
                            <option>Sıralama: En Yeniler</option>
                            <option>Fiyat: Düşükten Yükseğe</option>
                            <option>Fiyat: Yüksekten Düşüğe</option>
                            <option>En Çok Görüntülenenler</option>
                        </select>
                        <i class="fa-solid fa-chevron-down absolute right-3 top-2.5 text-gray-500 text-xs pointer-events-none"></i>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">
                <!-- Product 1 -->
                <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group flex flex-col h-full">
                    <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1595590424283-b8f1784cb2c8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="CYMA CM.030" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">₺1.850</div>
                    </div>
                    <div class="px-1 flex-grow flex flex-col">
                        <h3 class="text-white font-semibold text-base mb-1 line-clamp-2" title="CYMA CM.030 AEP/ACMP - Az Kullanılmış">CYMA CM.030 AEP/ACMP - Az Kullanılmış</h3>
                        <div class="flex-grow"></div>
                        <div class="flex justify-between items-center text-xs text-gray-400 mt-2 mb-4">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> İstanbul</span>
                            <span>12 Gün Önce</span>
                        </div>
                        <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group flex flex-col h-full">
                    <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1584041300085-f5f400780287?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="G&G M4" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">₺1.750</div>
                    </div>
                    <div class="px-1 flex-grow flex flex-col">
                        <h3 class="text-white font-semibold text-base mb-1 line-clamp-2" title="G&G M4 Karabina">G&G M4 Karabina - Temiz Durumda</h3>
                        <div class="flex-grow"></div>
                        <div class="flex justify-between items-center text-xs text-gray-400 mt-2 mb-4">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> Ankara</span>
                            <span>14 Gün Önce</span>
                        </div>
                        <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group flex flex-col h-full">
                    <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1616422285623-13ff0162193c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="WE Glock 17" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">₺1.350</div>
                    </div>
                    <div class="px-1 flex-grow flex flex-col">
                        <h3 class="text-white font-semibold text-base mb-1 line-clamp-2" title="WE Glock 17 Gen4 GBB">WE Glock 17 Gen4 GBB</h3>
                        <div class="flex-grow"></div>
                        <div class="flex justify-between items-center text-xs text-gray-400 mt-2 mb-4">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> İzmir</span>
                            <span>2 Gün Önce</span>
                        </div>
                        <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group flex flex-col h-full">
                    <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1544839843-085e68b376c6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Hücum Yeleği" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">₺1.250</div>
                    </div>
                    <div class="px-1 flex-grow flex flex-col">
                        <h3 class="text-white font-semibold text-base mb-1 line-clamp-2" title="Taktik Hücum Yeleği Olive Green">Taktik Hücum Yeleği Olive Green</h3>
                        <div class="flex-grow"></div>
                        <div class="flex justify-between items-center text-xs text-gray-400 mt-2 mb-4">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> Antalya</span>
                            <span>1 Ay Önce</span>
                        </div>
                        <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group flex flex-col h-full">
                    <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1583307584107-7ce854ca6d50?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="M4 Şarjör" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">₺350</div>
                    </div>
                    <div class="px-1 flex-grow flex flex-col">
                        <h3 class="text-white font-semibold text-base mb-1 line-clamp-2" title="M4 Mid-Cap Şarjör 120bb">M4 Mid-Cap Şarjör 120bb 3 Adet</h3>
                        <div class="flex-grow"></div>
                        <div class="flex justify-between items-center text-xs text-gray-400 mt-2 mb-4">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> Bursa</span>
                            <span>5 Gün Önce</span>
                        </div>
                        <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="bg-card rounded-xl p-3 shadow-lg border border-gray-800 hover:border-gray-700 transition-colors group flex flex-col h-full">
                    <div class="bg-lightGray rounded-lg h-44 mb-3 relative flex items-center justify-center overflow-hidden flex-shrink-0">
                        <img src="https://images.unsplash.com/photo-1636136706935-7798dc5ab26d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Taktik Kask" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute bottom-2 left-2 bg-priceBg text-white font-bold px-3 py-1 rounded text-sm shadow-md">₺950</div>
                    </div>
                    <div class="px-1 flex-grow flex flex-col">
                        <h3 class="text-white font-semibold text-base mb-1 line-clamp-2" title="FAST Kask Taktik Kılıf İle Birlikte">FAST Kask Taktik Kılıf İle Birlikte</h3>
                        <div class="flex-grow"></div>
                        <div class="flex justify-between items-center text-xs text-gray-400 mt-2 mb-4">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> İstanbul</span>
                            <span>Yeni İlan</span>
                        </div>
                        <button class="w-full bg-btnBg hover:bg-priceBg text-white font-medium py-2 rounded-lg text-sm transition-colors shadow">Detayları Gör</button>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12 mb-8">
                <nav class="flex items-center gap-1">
                    <button class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-800 transition-colors border border-gray-800 disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                    <button class="w-10 h-10 rounded-lg flex items-center justify-center text-white bg-[#4d6b38] hover:bg-priceBg font-medium shadow transition-colors">1</button>
                    <button class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-800 transition-colors border border-gray-800 font-medium">2</button>
                    <button class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-800 transition-colors border border-gray-800 font-medium">3</button>
                    <span class="w-10 h-10 flex items-center justify-center text-gray-600">...</span>
                    <button class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-800 transition-colors border border-gray-800 font-medium">12</button>
                    <button class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-800 transition-colors border border-gray-800">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </nav>
            </div>
        </div>

    </div>
</main>
