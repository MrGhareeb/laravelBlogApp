@extends("layouts.app")


@section("content")
<div class="container">


    <form action="{{route('storePost')}}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title"><br><br>
        <label for="body">Body</label>
        <input type="text" name="body"><br><br>
        <input type="submit" value="Submit">
    </form>

</div>
@endsection