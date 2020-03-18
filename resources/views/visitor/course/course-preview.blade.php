@extends('container')
@section('page_title', 'CSS3 BASICS')
@section('parent_page', 'Front End Subject')
@section('parent_parent_page','Subjects')
@section('content')
<div class="mt-lg-4" uk-grid>
    <div class="uk-width-1-4@m">
        <img src="{{url('')}}/assets/images/course/9.png" alt="" class="rounded shadow">
    </div>
    <div class="uk-width-expand">
        <h1 class="mt-0"> Learn html css javascript jquery in web design for addtional confilct </h1>
        <p> CSS is what makes the web beautiful. It describes how HTML should be displayed and how to
            layout elements. Take this class and get familiar with CSS!

    </div>
    <div class="uk-width-1-4@m">
        <a class="play-button" href="{{url('courses/front-end-courses')}}">
         Start Course
        </a>
    </div>

</div>

<div class="course-path-info my-4 my-lg-5">
    <h4 class="uk-text-bold"> What you will learn </h4>
    <ul>
        <li>Basics of programming </li>
        <li>Built-in types</li>
        <li>JavaScript operators</li>
        <li>Applying CSS Filters</li>
        <li>Flexible Box</li>
        <li>Floating and Clearing Elements</li>
        <li>Grid </li>
        <li>CSS Variables</li>
        <li>How Elements are Rendered</li>
        <li>CSS Grid Layout </li>
    </ul>
</div>

<ul class="course-path-level" uk-accordion>

    <li class="uk-open">
        <a class="uk-accordion-title" href="#">Course Lessons</a>
        <div class="uk-accordion-content">
            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam
                quis nostrud exerci tation ullamcorper suscipit,</p>

            <div class="path-wrap">

                <div class=" course-grid-slider">

                    <ul
                        class="uk-child-width-1-3@m uk-child-width-1-5@m uk-grid-match uk-grid">
                        <li>
                            <div class="course-card completed">
                                <div class="course-card-thumbnail">
                                <img src="{{url('')}}/assets/images/course/9.png">
                                    <a href="takecouse.html" class="play-button-trigger show"> </a>
                                    <span class="duration">5:39</span>
                                </div>
                                <div class="course-card-body">
                                    <span class="completed-text"> Completed </span>
                                    <h4> Getting Started </h4>
                                    <p> Get setup so you are ready to begin styling your HTML .</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-card">
                                <div class="course-card-thumbnail">
                                    <img src="{{url('')}}/assets/images/course/9.png">
                                    <a href="takecouse.html" class="play-button-trigger show"> </a>
                                    <span class="duration">2:39</span>
                                </div>
                                <div class="course-progressbar">
                                    <div class="course-progressbar-filler" style="width:50%"></div>
                                </div>
                                <div class="course-card-body">
                                    <h4> Applying CSS Styles </h4>
                                    <p> Learn different ways in which you can apply CSS .</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-card">
                                <div class="course-card-thumbnail">
                                    <img src="{{url('')}}/assets/images/course/9.png">
                                    <a href="takecouse.html" class="play-button-trigger show"> </a>
                                    <span class="duration">1:39</span>
                                </div>
                                <div class="course-progressbar">
                                    <div class="course-progressbar-filler" style="width:15%"></div>
                                </div>
                                <div class="course-card-body">
                                    <h4> Background colors </h4>
                                    <p> how to Add background colors and images </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-card">
                                <div class="course-card-thumbnail">
                                    <img src="{{url('')}}/assets/images/course/9.png">
                                    <a href="takecouse.html" class="play-button-trigger show"> </a>
                                    <span class="duration">2:19</span>
                                </div>
                                <div class="course-progressbar">
                                    <div class="course-progressbar-filler" style="width:0%"></div>
                                </div>
                                <div class="course-card-body">
                                    <h4>Fonts and Text </h4>
                                    <p>Learn how to do so in this lesson on fonts and text.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-card">
                                <div class="course-card-thumbnail">
                                    <img src="{{url('')}}/assets/images/course/9.png">
                                    <a href="takecouse.html" class="play-button-trigger show"> </a>
                                    <span class="duration">3:39</span>
                                </div>
                                <div class="course-progressbar">
                                    <div class="course-progressbar-filler" style="width:5%"></div>
                                </div>
                                <div class="course-card-body">
                                    <h4> Applying CSS Styles </h4>
                                    <p> Learn different ways in which you can apply CSS .</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-card">
                                <div class="course-card-thumbnail">
                                    <img src="{{url('')}}/assets/images/course/9.png">
                                    <a href="takecouse.html" class="play-button-trigger show"> </a>
                                    <span class="duration">5:39</span>
                                </div>
                                <div class="course-progressbar">
                                    <div class="course-progressbar-filler" style="width:25%"></div>
                                </div>
                                <div class="course-card-body">
                                    <h4> CSS variables </h4>
                                    <p> Giving you native and dynamic styles not possible{{url('')}}</p>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>

        </div>
    </li>

</ul>

@endsection

