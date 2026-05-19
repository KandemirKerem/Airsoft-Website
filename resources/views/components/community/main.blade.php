<!-- Main Content -->
<main class="flex-grow z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col lg:flex-row gap-6">

        <!-- Left Sidebar: Navigation -->
        <aside class="w-full lg:w-1/4 flex-shrink-0">
            <div class="bg-card rounded-xl border border-gray-800 p-5 sticky top-24 shadow-lg">
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-800">
                    <div class="w-12 h-12 rounded-full bg-gray-700 flex items-center justify-center text-xl text-white">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-sm">Hoş Geldin, Oyuncu</h3>
                        <p class="text-accent text-xs">@airsoft_fan</p>
                    </div>
                </div>

                <h3 class="font-semibold text-gray-400 mb-3 text-xs uppercase tracking-wider">Topluluk Menüsü</h3>
                <ul class="space-y-1 mb-6">
                    <li><a href="#" class="flex items-center gap-3 text-white bg-gray-800 px-3 py-2 rounded-lg text-sm transition-colors"><i class="fa-solid fa-house w-5 text-accent"></i> Ana Akış</a></li>
                    <li><a href="#" class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-gray-800 px-3 py-2 rounded-lg text-sm transition-colors"><i class="fa-solid fa-fire w-5"></i> Popüler</a></li>
                    <li><a href="#" class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-gray-800 px-3 py-2 rounded-lg text-sm transition-colors"><i class="fa-solid fa-bookmark w-5"></i> Kaydedilenler</a></li>
                </ul>

                <h3 class="font-semibold text-gray-400 mb-3 text-xs uppercase tracking-wider">Kategoriler</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-gray-800 px-3 py-2 rounded-lg text-sm transition-colors"><span class="w-2 h-2 rounded-full bg-blue-500"></span> Genel Sohbet</a></li>
                    <li><a href="#" class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-gray-800 px-3 py-2 rounded-lg text-sm transition-colors"><span class="w-2 h-2 rounded-full bg-green-500"></span> Taktik & Eğitim</a></li>
                    <li><a href="#" class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-gray-800 px-3 py-2 rounded-lg text-sm transition-colors"><span class="w-2 h-2 rounded-full bg-orange-500"></span> Silah Bakımı</a></li>
                    <li><a href="#" class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-gray-800 px-3 py-2 rounded-lg text-sm transition-colors"><span class="w-2 h-2 rounded-full bg-purple-500"></span> Etkinlikler & Maçlar</a></li>
                </ul>
            </div>
        </aside>

        <!-- Center: Feed -->
        <div class="w-full lg:w-2/4 flex flex-col gap-6">
            <!-- Create Post Box -->
            <div class="bg-card rounded-xl border border-gray-800 p-4 shadow-lg">
                <div class="flex gap-3">
                    <div class="w-10 h-10 rounded-full bg-gray-700 flex-shrink-0 flex items-center justify-center text-white text-sm">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="flex-grow">
                        <textarea class="w-full bg-inputBg border border-gray-700 rounded-lg p-3 text-sm text-white focus:outline-none focus:border-accent transition-colors resize-none placeholder-gray-500 min-h-[80px]" placeholder="Toplulukla bir şeyler paylaş (Taktik, Soru, Ekipman)..."></textarea>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-3 pl-13">
                    <div class="flex gap-2 text-gray-400 pl-12">
                        <button class="hover:text-accent transition-colors p-2 rounded hover:bg-gray-800" title="Görsel Ekle"><i class="fa-regular fa-image"></i></button>
                        <button class="hover:text-accent transition-colors p-2 rounded hover:bg-gray-800" title="Video Ekle"><i class="fa-solid fa-video"></i></button>
                        <button class="hover:text-accent transition-colors p-2 rounded hover:bg-gray-800" title="Anket Oluştur"><i class="fa-solid fa-square-poll-horizontal"></i></button>
                    </div>
                    <button class="bg-[#4d6b38] hover:bg-priceBg text-white px-5 py-1.5 rounded-lg text-sm font-medium transition-colors shadow">Paylaş</button>
                </div>
            </div>

            <!-- Feed Posts -->

            <!-- Post 1 -->
            <div class="bg-card rounded-xl border border-gray-800 p-4 shadow-lg">
                <!-- Post Header -->
                <div class="flex justify-between items-start mb-3">
                    <div class="flex gap-3 items-center">
                        <img src="https://i.pravatar.cc/150?img=11" alt="User" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <h4 class="text-white font-semibold text-sm flex items-center gap-1">Mert Yılmaz <i class="fa-solid fa-circle-check text-accent text-xs" title="Doğrulanmış Oyuncu"></i></h4>
                            <p class="text-gray-500 text-xs">2 saat önce &middot; <span class="text-purple-400">Silah Bakımı</span></p>
                        </div>
                    </div>
                    <button class="text-gray-500 hover:text-white"><i class="fa-solid fa-ellipsis"></i></button>
                </div>
                <!-- Post Content -->
                <div class="text-gray-300 text-sm mb-4 leading-relaxed">
                    <p>Arkadaşlar merhaba, M4 model tüfeğimin gearbox'ını temizlemek istiyorum ama daha önce hiç açmadım. Hangi gres yağını kullanmamı önerirsiniz? Silikon bazlı spreyler yeterli olur mu yoksa özel bir dişli yağı mı almalıyım?</p>
                </div>
                <!-- Post Actions -->
                <div class="flex items-center justify-between border-t border-gray-800 pt-3 text-gray-400 text-sm">
                    <button class="flex items-center gap-2 hover:text-accent transition-colors"><i class="fa-regular fa-heart"></i> 24 Beğeni</button>
                    <button class="flex items-center gap-2 hover:text-accent transition-colors text-accent"><i class="fa-solid fa-comment"></i> 8 Yorum</button>
                    <button class="flex items-center gap-2 hover:text-accent transition-colors"><i class="fa-solid fa-share-nodes"></i> Paylaş</button>
                </div>

                <!-- Comments Section -->
                <div class="mt-4 bg-[#1b1e20] rounded-lg p-3 border border-gray-800">
                    <div class="flex gap-2 mb-4">
                        <img src="https://i.pravatar.cc/150?img=33" alt="User" class="w-8 h-8 rounded-full object-cover flex-shrink-0">
                        <div class="bg-gray-800 rounded-lg p-2.5 text-sm w-full">
                            <h5 class="text-white font-medium text-xs mb-1">Ali Kaan</h5>
                            <p class="text-gray-300">Kesinlikle teflon bazlı dişli gresi kullanmalısın. Silikon sprey dişlilerde tutunmaz, sadece o-ring ve plastik/kauçuk parçalar için uygundur.</p>
                            <div class="flex gap-3 mt-2 text-xs text-gray-500">
                                <button class="hover:text-accent font-medium text-accent">Beğen (5)</button>
                                <button class="hover:text-white font-medium">Yanıtla</button>
                                <span>1 saat önce</span>
                            </div>
                        </div>
                    </div>
                    <!-- Add Comment -->
                    <div class="flex gap-2 items-center mt-2">
                        <div class="w-8 h-8 rounded-full bg-gray-700 flex-shrink-0 flex items-center justify-center text-white text-xs">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="relative w-full flex items-center">
                            <input type="text" placeholder="Bir yorum yaz..." class="w-full bg-inputBg border border-gray-700 rounded-full py-1.5 pl-4 pr-10 text-sm text-white focus:outline-none focus:border-accent transition-colors">
                            <button class="absolute right-3 text-accent hover:text-white transition-colors"><i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 2 -->
            <div class="bg-card rounded-xl border border-gray-800 p-4 shadow-lg">
                <!-- Post Header -->
                <div class="flex justify-between items-start mb-3">
                    <div class="flex gap-3 items-center">
                        <img src="https://i.pravatar.cc/150?img=52" alt="User" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <h4 class="text-white font-semibold text-sm">Burak Demir</h4>
                            <p class="text-gray-500 text-xs">5 saat önce &middot; <span class="text-green-400">Etkinlikler & Maçlar</span></p>
                        </div>
                    </div>
                    <button class="text-gray-500 hover:text-white"><i class="fa-solid fa-ellipsis"></i></button>
                </div>
                <!-- Post Content -->
                <div class="text-gray-300 text-sm mb-3 leading-relaxed">
                    <p>Hafta sonu İstanbul Orman sahasında yapılan CQB etkinliğinden harika kareler! Ekibe teşekkürler, efsane bir gündü. 🌲🔫</p>
                </div>
                <div class="rounded-lg overflow-hidden mb-4 border border-gray-800">
                    <img src="https://images.unsplash.com/photo-1590847953253-1d07c39755ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Airsoft Event" class="w-full h-64 object-cover hover:opacity-90 transition-opacity cursor-pointer">
                </div>
                <!-- Post Actions -->
                <div class="flex items-center justify-between border-t border-gray-800 pt-3 text-gray-400 text-sm">
                    <button class="flex items-center gap-2 hover:text-accent transition-colors text-accent"><i class="fa-solid fa-heart"></i> 112 Beğeni</button>
                    <button class="flex items-center gap-2 hover:text-accent transition-colors"><i class="fa-regular fa-comment"></i> 14 Yorum</button>
                    <button class="flex items-center gap-2 hover:text-accent transition-colors"><i class="fa-solid fa-share-nodes"></i> Paylaş</button>
                </div>
                <!-- Add Comment Box -->
                <div class="flex gap-2 items-center mt-3 pt-3 border-t border-gray-800">
                    <div class="w-8 h-8 rounded-full bg-gray-700 flex-shrink-0 flex items-center justify-center text-white text-xs">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="relative w-full flex items-center">
                        <input type="text" placeholder="Yorum ekle..." class="w-full bg-inputBg border border-gray-700 rounded-full py-1.5 pl-4 pr-10 text-sm text-white focus:outline-none focus:border-accent transition-colors">
                        <button class="absolute right-3 text-accent hover:text-white transition-colors"><i class="fa-solid fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>

            <div class="text-center py-4">
                <button class="text-accent hover:text-white text-sm font-medium transition-colors"><i class="fa-solid fa-spinner animate-spin mr-2"></i> Daha Fazla Yükle</button>
            </div>
        </div>

        <!-- Right Sidebar: Widgets -->
        <aside class="w-full lg:w-1/4 flex-shrink-0">
            <div class="flex flex-col gap-6 sticky top-24">
                <!-- Widget: Trending -->
                <div class="bg-card rounded-xl border border-gray-800 p-5 shadow-lg">
                    <h3 class="font-semibold text-white mb-4 text-sm flex items-center gap-2"><i class="fa-solid fa-arrow-trend-up text-accent"></i> Gündemdekiler</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs text-gray-500">Etkinlik</p>
                            <a href="#" class="text-sm text-gray-300 hover:text-white font-medium block mt-0.5">Hafta Sonu Büyük Çatışma</a>
                            <p class="text-xs text-gray-500 mt-1">120+ Gönderi</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">İnceleme</p>
                            <a href="#" class="text-sm text-gray-300 hover:text-white font-medium block mt-0.5">Tokyo Marui NGRS Alınır mı?</a>
                            <p class="text-xs text-gray-500 mt-1">85 Gönderi</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Taktik</p>
                            <a href="#" class="text-sm text-gray-300 hover:text-white font-medium block mt-0.5">CQB İçin Ekipman Tavsiyeleri</a>
                            <p class="text-xs text-gray-500 mt-1">42 Gönderi</p>
                        </div>
                    </div>
                </div>

                <!-- Widget: Top Members -->
                <div class="bg-card rounded-xl border border-gray-800 p-5 shadow-lg">
                    <h3 class="font-semibold text-white mb-4 text-sm flex items-center gap-2"><i class="fa-solid fa-medal text-yellow-500"></i> Aktif Üyeler</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="https://i.pravatar.cc/150?img=68" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="text-xs text-white font-medium">SniperTR</p>
                                    <p class="text-[10px] text-gray-500">4.2k Puan</p>
                                </div>
                            </div>
                            <button class="text-accent hover:bg-gray-800 px-2 py-1 rounded text-xs transition-colors border border-gray-700">Takip Et</button>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <img src="https://i.pravatar.cc/150?img=12" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="text-xs text-white font-medium">Cpt.Price</p>
                                    <p class="text-[10px] text-gray-500">3.8k Puan</p>
                                </div>
                            </div>
                            <button class="text-accent hover:bg-gray-800 px-2 py-1 rounded text-xs transition-colors border border-gray-700">Takip Et</button>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</main>
