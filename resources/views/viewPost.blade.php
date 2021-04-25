@extends('layouts.app')

@section('content')

<div class="container">
    <h1 style="text-align: center">
        {{ $post->title }}
    </h1>
    <div class="card-no-hover">
        {{ $post->body }}
    </div>
</div>

@endsection