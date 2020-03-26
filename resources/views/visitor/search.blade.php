@extends("container")
@section('page_title', 'Search')
@section("content")
Search Page
<form action="/word" method="POST">
    {{csrf_field()}}
    <input type="text" name="search">
    <input type="submit" value="Search">
</form>
@endsection
