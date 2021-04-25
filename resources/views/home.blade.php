@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center">Posts</h1>
    @foreach ($posts as $post)
        <div class="card">
            <a href="post/{{ $post->id }}">
                <div>{{ $post->id }} | {{ $post->title }}</div> 
                <div><a href="post/edit/{{ $post->id }}">Edit</a> | <a href="post/delete/{{ $post->id }}">Delete</a></div>
            </a>
        </div>
    @endforeach
</div>
@endsection