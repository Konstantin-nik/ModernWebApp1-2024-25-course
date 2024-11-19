<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <input 
        type="text" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        value="{{ old($name , $value) }}" 
        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
        placeholder="{{ $placeholder ? $placeholder : "Enter the $name" }}">
    @error('{{ $name }}')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>