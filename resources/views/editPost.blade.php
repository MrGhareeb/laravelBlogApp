@extends("layouts.app")


@section("content")
<div class="container">

    

    <form action="{{route('updatePost',['id'=>$id])}}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $title }}"><br><br>
        <label for="body">Body</label>
        <input type="text" name="body" value="{{ $body }}"><br><br>
        <input type="submit" value="Update">
    </form>

</div>
@endsection