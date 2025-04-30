@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out border-neutral-content/50        text-neutral-content/70      focus:outline-none focus:text-neutral-content focus:border-neutral-content      hover:text-neutral-content hover:border-neutral-content '
            : 'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out border-transparent               text-neutral-content/40      focus:outline-none focus:text-neutral-content focus:border-neutral-content      hover:text-neutral-content hover:border-neutral-content  ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
