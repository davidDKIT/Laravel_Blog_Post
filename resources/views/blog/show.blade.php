@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>
    <div>
    <img class="m-auto h-80" src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

    {{-- comment section --}}
    <h2 class="mt-6 text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">Comments</h2>
    <div>
        <form action="/blog/{{ $post->id }}/comments" method="POST" class="mb-0">
            @csrf
            <label for="author" class="text-sm font-medium text-gray-700">Author</label>
            <input type="text" name="author" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm" value="{{ old('author')}}" required>

            <label for="author" class="mt-6 block text-sm font-medium text-gray-700">Text</label>
            <textarea name="text" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm" required>{{ old('text') }}</textarea>

            @if ($errors->any())
                <div class="mt-6">
                    <ul class="bg-red-100 px-4 py-5 roundend-md">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="mt-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 text-gray-100 hover:text-red-800 focus:outline-none">Post</button>
        </form>

        <div class="mt-6">
            @foreach ($comments as $comment)
                <div class="mb-5 bg-white px-4 py-6 rounded-sm shadow-md">
                    <div class="flex">
                        {{-- Avatar --}}
                        <div class="mr-3 flex flex-col justify-center">
                            <div>
                                <?php
                                    $parts    = explode(' ', $comment->author);
                                    $initials = strtoupper($parts[0][0] . $parts[count($parts) - 1][0]);
                                ?>

                                <span class="bg-gray-300 p-3 rounded-full">{{ $initials }}</span>
                            </div>
                        </div>
                        {{-- Avatar --}}

                        <div class="flex flex-col justify-center">
                            <p class="mr-2 font-bold">{{ $comment->author }}</p>
                            <p class="text-gray-600">{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p>{{ $comment->text }}</p>
                    </div>

                    <form action="/comments/{{ $comment->id }}" method="POST" class="mb-0 mt-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm py-1 px-2 border border-gray-400 shadow-sm rounded-md hover:shadow-md">Delete</button>
                    </form>
                </div>
            @endforeach

            {{ $comments->links() }}
        </div>
    </div>
</div>

@endsection 