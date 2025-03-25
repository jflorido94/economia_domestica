<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-accent']) }}>
    {{ $slot }}
</button>
