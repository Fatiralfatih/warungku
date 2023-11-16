@props(['name', 'placeholder', 'rows', 'id'])
<textarea class="ti-form-input @error($name) !border-danger focus:border-danger focus:ring-danger @enderror"
    id="{{ $id }}" name="{{ $name }}" placeholder="{{ ucwords($placeholder) }}"
    rows="{{ $rows }}" required>{{ old('deskripsi') }}</textarea>
@error($name)
    <p class="text-sm text-red-600 font-semibold"> {{ ucwords($message) }} </p>
@enderror
