@extends("container")
@section('page_title', 'Search Result')
@section("content")
@if ($errors->any())
<br>
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

<form  method="get" id="searchform" action="?search_for=">
    <input minlength="2" autofocus required type="text"  id="word" name="search" required="" autocomplete="off">
    <div id="error1"></div>
    <div id="error"></div>
    <input id="searchSubmit" type="submit" value="Search">
</form>

@endif

@if (Session::has('message'))
<li>{!! session('message') !!}</li>
{{ Session::forget('message') }}
@endif

<div class="row">
    <div class="col-lg-6">
        @foreach($data['courses'] as  $course)
            {{$course->title}}<br>
        @endforeach
    </div>

    <div class="col-lg-6">
        @foreach($data['articles'] as  $article)
        {{$article->title}}<br>
        @endforeach
    </div>

</div>


@endsection
