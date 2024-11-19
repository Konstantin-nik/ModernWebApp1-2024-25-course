<x-main-layout>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Create New Article</h1>
        <form action="{{ route('user.articles.store') }}" method="post" class="space-y-6">
            @csrf

            <x-form-text name="title" label="Title" />

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea 
                    id="content" 
                    name="content" 
                    rows="5" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Write your article content here">{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between items-center">
                <a 
                    href="{{ route('user.articles.index') }}" 
                    class="text-indigo-600 hover:text-indigo-900 text-sm">
                    Back
                </a>
                <button 
                    type="submit" 
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create Article
                </button>
            </div>
        </form>
    </div>
</x-main-layout>
