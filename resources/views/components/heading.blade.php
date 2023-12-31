@php
    $classes = "text-3xl font-bold dark:text-white pb-4";
    $classes2 = "border-2 border-slate-200";
@endphp

<div class="w-fit">
    <h3 {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</h3>
    <hr {{ $attributes->merge(['class' => $classes2]) }}/>
</div>
