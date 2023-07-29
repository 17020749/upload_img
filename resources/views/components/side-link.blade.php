@props(['active'])

@php
$classes = ($active ?? false)
            ? "relative flex flex-row items-center h-11 focus:outline-none bg-gray-100 text-gray-800 border-l-4 border-transparent border-indigo-500 pr-6 transition-colors duration-150 ease-in-out"
            : "relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6 transition-colors duration-150 ease-in-out";
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
