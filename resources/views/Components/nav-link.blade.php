@props(['href', 'active' => false])

@php
    $classes = $active
                ? 'text-white bg-gray-800 pr-2' // Tamnije boje za aktivan state
                : 'text-gray-500 hover:text-gray-100 pr-2'; // Svijetlije boje za neaktivni state
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
