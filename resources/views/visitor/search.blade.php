@extends("container")
@section('page_title', 'Search')
@section("content")
Search Page
@foreach ($data as $user)
    <p>{{ $user->title }}</p>
@endforeach
@endsection
