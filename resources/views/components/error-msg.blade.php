@php
    $classes = "mt-2 text-xs text-red-600 dark:text-red-400"
@endphp

<p {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</p>
