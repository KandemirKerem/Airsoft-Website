<!-- Navigation -->
<nav class="hidden md:flex space-x-6 h-full items-center">

    <x-partials.navlink href="{{route('homepage')}}" :active="request()->is('/')">Ana Sayfa</x-partials.navlink>
    <x-partials.navlink href="{{route('listings.index')}}" :active="request()->is('ilanlar')">İlanlar</x-partials.navlink>
    <x-partials.navlink href="{{route('community')}}" :active="request()->is('topluluk')">Topluluk</x-partials.navlink>
    <x-partials.navlink href="{{route('about')}}" :active="request()->is('hakkimizda')">Hakkımızda</x-partials.navlink>

</nav>
