<x-main-layout >
    @foreach ($articles as $article)
        <a href="/articles/{{ $article->id }}" class="mt-10">
            <h2 class="font-extrabold text-lg">{{$article->title}}</h2>
            <div>
                {{ $article->published_at->format('Y-M-d') }}
            </div>
            <div>
                @foreach($article->categories as $category)
                    <span class="bg-slate-500 text-gray-800 px-2 py-1 rounded-md text-xs" style="background-color: {{$colors[$loop->index % count($colors)]}}">{{$category->name}}</span>
                @endforeach
            </div>
            <div>
                {{ $article->content }} 
            </div>
            <!-- Comments Section -->
            <div class="mt-4">
                <h3 class="font-semibold text-md">Comments</h3>
                @forelse($article->comments as $comment)
                    <div class="mt-2 px-2 py-1 p-3 border border-gray-200 rounded-lg">
                        <p class="text-sm text-gray-600">
                            <strong>{{ $comment->user->name }}</strong> 
                            commented on {{ $comment->created_at->format('Y-M-d H:i') }}
                        </p>
                        <p>{{ $comment->content }}</p>
                    </div>
                @empty
                    <p class="text-sm text-gray-500">No comments yet.</p>
                @endforelse
            </div>
        </a>
    @endforeach
</x-main-layout>