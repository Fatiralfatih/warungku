@props(['name', 'type', 'id'])

<div class="flex-col space-y-2">
<div class="relative">
    <input type="{{ $type }}"
        id="{{ $id }}"
        name="{{$name}}"
        placeholder="Masukkan Harga"
        required
        autofocus
        {{ $attributes(['value' => old($name)]) }}
        class="ti-form-input ltr:pl-9 ltr:pr-16 rtl:pr-9 rtl:pl-16 focus:z-10 @error($name) !border-danger focus:border-danger focus:ring-danger @enderror">
    <div
        class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none z-20 ltr:pl-4 rtl:pr-4">
        <span class="text-gray-500 dark:text-white/70">$</span>
    </div>
    <div
        class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none z-20 ltr:pr-4 rtl:pl-4">
        <span class="text-gray-500 dark:text-white/70">Rp</span>
    </div>
</div>
@error($name)
    <p class="text-sm text-red-600 font-semibold"> {{ ucwords($message) }} </p>
@enderror
</div>