@extends('layouts.app')

@section('content')
<form class="d-flex" method="post">
    <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
    <button class="btn btn-dark" type="submit" name="submit">Search</button>
</form>
<div>
    <img src="{{ asset('images/' . $post->image_path) }}" alt="">
</div>
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
</div>

@endsection 