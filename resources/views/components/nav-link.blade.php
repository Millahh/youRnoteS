@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex underline underline-offset-8 items-center px-1 pt-1 border-b-2 border-indigo-400 text-base font-semibold font-sans leading-5 text-white focus:text-gray-700 transition duration-150 ease-in-out'
            : 'inline-flex underline underline-offset-8 items-center px-1 pt-1 border-b-2 border-transparent text-base leading-5 font-semibold font-sans text-white hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
