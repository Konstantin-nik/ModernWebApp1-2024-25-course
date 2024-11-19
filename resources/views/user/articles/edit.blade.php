<x-main-layout>
    <form action="{{ route('user.articles.update', $article) }}" method="post">
        @method('PUT')
        @csrf

        <x-form-text name="title" label="Title" value="{{ $article->title }}"/>

        <label for="content"> Content </label><br /> 
        <textarea name="content">{{ old('content', $article->content) }}</textarea>
        @error('content')<div class="text-red-500">{{ $message }}</div>@enderror

        <br /><br />

        <a href="{{ route('user.articles.index') }}">Back</a><br />
        <button type="submit">Save changes</button>
    </form>
</x-main-layout>
