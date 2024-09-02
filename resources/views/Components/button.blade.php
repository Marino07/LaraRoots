{{-- resources/views/components/button.blade.php --}}
@php
    $tag = $attributes->has('href') ? 'a' : 'button';
@endphp

<{{ $tag }} style="margin-top: 20px;" {{ $attributes->merge(['class' => 'px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75']) }}>
    {{ $slot }}
</{{ $tag }}>
