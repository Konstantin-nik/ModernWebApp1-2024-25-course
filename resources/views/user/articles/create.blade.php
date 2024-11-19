<x-main-layout>
    <form action="{{ route('user.articles.store') }}" method="post">
        @csrf

        <label for="title"> Title </label><br /> 
        <input name="title" value="{{ old('title') }}">
        @error('title')<div class="text-red-500">{{ $message }}</div>@enderror

        <br /><br />

        <label for="content"> Content </label><br /> 
        <textarea name="content">{{ old('content') }}</textarea>
        @error('content')<div class="text-red-500">{{ $message }}</div>@enderror

        <br /><br />

        <a href="{{ route('user.articles.index') }}">Back</a><br />
        <button type="submit">Create article</button>
    </form>
</x-main-layout>
