<x-main-layout>
    <form action="{{ route('user.articles.update', $article) }}" method="post">
        @method('PUT')
        @csrf

        <x-form-text name="title" label="Title" value="{{ $article->title }}"/>
        <x-form-textarea name="content" label="Content" value="{{ $article->content }}" />

        <a href="{{ route('user.articles.index') }}">Back</a><br />
        <button type="submit">Save changes</button>
    </form>
</x-main-layout>
