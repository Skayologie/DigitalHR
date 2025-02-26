@props(['active'])

@php
$classes = ($active ?? false)
            ? 'sidebar-link active flex items-center px-4 py-3'
            : 'sidebar-link flex items-center px-4 py-3';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
