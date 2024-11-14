<x-main-layout>
    @foreach ($articles as $article)
        <div class="mt-4">
            <h2 class="font-bold text-lg">{{$article->title}}</h2>
            <div>
                {{ $article->published_at->format('Y-M-d') }}
            </div>
            <div>
                @foreach($article->categories as $category)
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded-full text-xs">{{$category->name}}</span>
                @endforeach
            </div>
            <div>
                {{ $article->content }} 
            </div>
        </div>
    @endforeach
</x-main-layout>