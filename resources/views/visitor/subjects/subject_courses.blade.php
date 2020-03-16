@extends('container')
@section('page_title', 'Front End Courses')
@section('parent_page', 'Subjects')
@section('content')

<h4 class="mt-lg-7 mt-4">Front End Courses</h4>
<div class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid" uk-grid>
    <div>
        <a href="{{url('subject/front_end/Css3/preview')}}">
            <div class="course-card">
                <div class="course-card-thumbnail ">
                    <img src="../assets/images/course/2.png">
                    <span class="play-button-trigger"></span>
                </div>
                <div class="course-card-body">
                    <div class="course-card-info">
                        <div>
                            <span class="catagroy">Angular</span>
                        </div>
                        <div>
                            <i class="icon-feather-bookmark icon-small"></i>
                        </div>
                    </div>
                    <h4>Learn Angular Fundamentals </h4>
                    <p> Learn how to build launch React web applications using .. </p>
                    <div class="course-card-footer">
                        <h5> <i class="icon-feather-film"></i> 12 Lectures </h5>
                        <h5> <i class="icon-feather-clock"></i> 64 Hours </h5>
                    </div>
                </div>

            </div>
        </a>

    </div>
    <div>
        <a href="course-intro.html">
            <div class="course-card">
                <div class="course-card-thumbnail ">
                    <img src="../assets/images/course/3.png">
                    <span class="play-button-trigger"></span>
                </div>
                <div class="course-card-body">
                    <div class="course-card-info">
                        <div>
                            <span class="catagroy">JavaScript</span>
                        </div>
                        <div>
                            <i class="icon-feather-bookmark icon-small"></i>
                        </div>
                    </div>
                    <h4>The Complete JavaScript </h4>
                    <p> JavaScript is how you build interactivity on the web.. </p>
                    <div class="course-card-footer">
                        <h5> <i class="icon-feather-film"></i> 14 Lectures </h5>
                        <h5> <i class="icon-feather-clock"></i> 55 Hours </h5>
                    </div>
                </div>

            </div>
        </a>

    </div>
    <div>
        <a href="course-intro.html">
            <div class="course-card">
                <div class="course-card-thumbnail ">
                    <img src="../assets/images/course/1.png">
                    <span class="play-button-trigger"></span>
                </div>
                <div class="course-card-body">
                    <div class="course-card-info">
                        <div>
                            <span class="catagroy">HTML</span>
                        </div>
                        <div>
                            <i class="icon-feather-bookmark icon-small"></i>
                        </div>
                    </div>

                    <h4>Ultimate Web Developer Course </h4>
                    <p> HTML is the building blocks of the web. It gives pages structure and ..</p>

                    <div class="course-card-footer">
                        <h5> <i class="icon-feather-film"></i> 33 Lectures </h5>
                        <h5> <i class="icon-feather-clock"></i> 26 Hours </h5>
                    </div>
                </div>

            </div>
        </a>

    </div>
    <div>
        <a href="course-intro.html">
            <div class="course-card">
                <div class="course-card-thumbnail ">
                    <img src="../assets/images/course/5.png">
                    <span class="play-button-trigger"></span>
                </div>
                <div class="course-card-body">
                    <div class="course-card-info">
                        <div>
                            <span class="catagroy">HTML</span>
                        </div>
                        <div>
                            <i class="icon-feather-bookmark icon-small"></i>
                        </div>
                    </div>

                    <h4>Ultimate Web Developer Course </h4>
                    <p> HTML is the building blocks of the web. It gives pages structure and ..</p>

                    <div class="course-card-footer">
                        <h5> <i class="icon-feather-film"></i> 34 Lectures </h5>
                        <h5> <i class="icon-feather-clock"></i> 54 Hours </h5>
                    </div>
                </div>

            </div>
        </a>
    </div>
</div>



@endsection
