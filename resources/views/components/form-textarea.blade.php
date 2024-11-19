<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <textarea 
        id="{{ $name }}" 
        name="{{ $name }}" 
        rows="5" 
        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
        placeholder="Write your article content here">{{ old($name, $value) }}</textarea>
    @error($name)
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>