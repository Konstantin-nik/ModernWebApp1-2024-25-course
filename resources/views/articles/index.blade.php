<x-main-layout >
    @foreach ($articles as $article)
        <h2 mt-2>{{ $article->title }}</h2>
    @endforeach
</x-main-layout>