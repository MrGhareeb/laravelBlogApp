@extends("layouts.app")


@section("content")
<div class="container">


    <form action="{{route('updatePost')}}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" value=""><br><br>
        <label for="body">Body</label>
        <input type="text" name="body" value=""><br><br>
        <input type="submit" value="Submit">
    </form>

</div>
@endsection