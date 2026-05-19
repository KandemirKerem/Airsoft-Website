<!DOCTYPE html>
<html lang="tr">

<!-- Head Section -->
<x-partials.head>
    <x-slot:title>
        {{$title}}
    </x-slot:title>
</x-partials.head>

<!-- Body -->
<body class="antialiased min-h-screen flex flex-col relative overflow-x-hidden">

<!-- Header -->
<x-partials.header></x-partials.header>

<!-- Content -->
{{$slot}}

<!-- Footer -->
<x-partials.footer></x-partials.footer>

</body>
</html>
