@php
    $classes = "block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
@endphp

<li>
    <a {{ $attributes->merge(['class', $classes]) }}>{{ $slot }}</a>
</li>
