@extends("container")
@section("content")


                <div class="container">

                    <h1 class="mb-2"> For Free Courses in your hand </h1>

                    @include('visitor.subjects.most-view')
                    @include('visitor.course.most-16-view')
                    @include('visitor.course.recent-16-view')

                </div>





@endsection
