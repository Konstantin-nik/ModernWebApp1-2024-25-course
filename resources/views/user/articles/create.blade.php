<x-main-layout>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Create New Article</h1>
        <form action="{{ route('user.articles.store') }}" method="post" class="space-y-6">
            @csrf

            <x-form-text name="title" label="Title" />
            <x-form-textarea name="content" label="Content" />

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
