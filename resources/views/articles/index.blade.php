<x-main-layout >
    @foreach ($articles as $article)
        <h2 class="mt-2 font-semibold"><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h2>
    @endforeach
</x-main-layout>