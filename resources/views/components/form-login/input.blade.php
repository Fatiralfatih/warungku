@props(['name', 'type', 'class'])

<div class="mt-2">
    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
        class="block w-full ps-2 rounded-sm border-0 py-1.5 text-gray-900 rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 
        @error($name) border-2 border-rose-500 placeholder:border-0-blue focus:ring-2 focus:ring-inset focus:ring-red-600  @enderror
        "
        {{ $attributes(['value' => old($name)]) }}
        >
    @error($name)
        <p class="text-sm text-red-500 font-semibold"> {{ ucwords($message) }} </p>
    @enderror
</div>
