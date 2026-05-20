@if ($paginator->hasPages())
    <div class="flex justify-center mt-12 mb-8">
        <nav class="flex items-center gap-1">

            {{-- Önceki Sayfa Butonu --}}
            @if ($paginator->onFirstPage())
                <button class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-700 border border-gray-800 opacity-50 cursor-not-allowed" disabled>
                    <i class="fa-solid fa-angle-left"></i>
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-800 transition-colors border border-gray-800">
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            @endif

            {{-- Sayfa Numaraları Elemanları --}}
            @foreach ($elements as $element)
                {{-- "..." Üç Nokta Ayracı --}}
                @if (is_string($element))
                    <span class="w-10 h-10 flex items-center justify-center text-gray-600">{{ $element }}</span>
                @endif

                {{-- Sayfa Linkleri Döngüsü --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- Aktif Sayfa (Senin Yeşil Buton) --}}
                            <button class="w-10 h-10 rounded-lg flex items-center justify-center text-white bg-[#4d6b38] font-medium shadow transition-colors cursor-default" @disabled(true)>{{ $page }}</button>
                        @else
                            {{-- Pasif Sayfalar --}}
                            <a href="{{ $url }}" class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-800 transition-colors border border-gray-800 font-medium">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Sonraki Sayfa Butonu --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-800 transition-colors border border-gray-800">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            @else
                <button class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-700 border border-gray-800 opacity-50 cursor-not-allowed" disabled>
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            @endif

        </nav>
    </div>
@endif
