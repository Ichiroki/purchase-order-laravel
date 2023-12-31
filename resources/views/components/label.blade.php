@php
    $classes = 'block mb-2 text-sm font-medium text-gray-900 dark:text-white'
@endphp

<label {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</label>
