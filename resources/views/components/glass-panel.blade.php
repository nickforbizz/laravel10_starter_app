@props([
    'class' => '',
])

<div {{ $attributes->merge(['class' => 'glass-panel ' . $class]) }}>
    {{ $slot }}
</div>
