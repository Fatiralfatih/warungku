@props(['name', 'type', 'placeholder', 'id'])

<div>
    <input id="{{ $id }}" type="{{ $type }}" name="{{ $name }}"
        class="my-auto ti-form-input @error($name) !border-danger focus:border-danger focus:ring-danger @enderror"
        required placeholder="{{ ucwords($placeholder) }}" {{ $attributes(['value' => old($name)]) }}>
    @error($name)
        <p class="text-sm text-red-600 font-semibold"> {{ ucwords($message) }} </p>
    @enderror
</div>
