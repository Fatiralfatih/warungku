@props(['name'])

<div>
    <label 
    for="{{ $name }}" 
    {{ $attributes->merge(['class' => 'text-sm leading-6 text-gray-900']) }}
    >
    {{ ucwords( $name ) }}
</label>
</div>
