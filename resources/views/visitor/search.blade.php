@extends("container")
@section('page_title', 'Searسch')
@section("content")
Search Pagse
<form  method="get" id="searchform" action="/">
    <input type="text"  id="word" name="search" required="" autocomplete="off">
    <div id="error1"></div>
    <div id="error"></div>
    <input id="searchSubmit" type="submit" value="Search">
</form>
<div id="result">

</div>
@endsection
@section("script")

{{-- $("#searchform").submit(function(){
    var word = $("#word").val();
    var arr = word.split(" ");
    joined = arr.join("+");
    $("#searchform").attr('action',{{url('/')}}+"?searich_for=" + joined);
    url = $("#searchform").attr('action');
    alert(url);
}); --}}

@endsection
