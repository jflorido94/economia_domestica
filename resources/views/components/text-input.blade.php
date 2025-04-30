@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-base-content focus:border-accent focus:ring-accent rounded-md shadow-sm']) }}>
