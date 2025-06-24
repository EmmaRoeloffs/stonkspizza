@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-black dark:text-black focus:outline-none focus:border-indigo-700 relative bottom-1.5 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black dark:text-black hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:border-gray-300 dark:focus:border-gray-700 hover:relative hover:bottom-1.5 focus:relative focus:bottom-1.5 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
