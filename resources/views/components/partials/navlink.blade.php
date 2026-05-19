@props(['active' => false])
<a
    class="{{
    $active ?
    'text-white border-b-2 border-accent h-full flex items-center px-1 text-sm font-medium'
    :
    'text-gray-400 hover:text-white h-full flex items-center px-1 text-sm font-medium transition-colors border-b-2 border-transparent hover:border-gray-600'
    }}"
    {{ $attributes }} >
    {{$slot}}
</a>
