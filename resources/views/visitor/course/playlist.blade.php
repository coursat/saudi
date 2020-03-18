@extends("container")
@section('page_title', 'CSS3 BASICS')
@section('parent_page', 'Front End Subject')
@section('parent_parent_page','Subjects')
@section("content")

<div class="page-content">

    <div class="uk-grid-collapse" uk-grid>
        <div class="uk-width-3-4@m bg-white">

            <ul id="video-slider" class="uk-switcher">

                <li>
                    <!-- to autoplay video uk-video="automute: true" -->
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/9gTw2EDkaDQ" frameborder="0"
                            uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                    </div>

                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                            uk-responsive></iframe>
                    </div>
                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/CGSdK7FI9MY" frameborder="0" allowfullscreen
                            uk-responsive></iframe>
                    </div>
                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/4I1WgJz_lmA" frameborder="0" allowfullscreen
                            uk-responsive></iframe>
                    </div>
                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0" allowfullscreen
                            uk-responsive></iframe>
                    </div>
                </li>
                <li>
                    <div class="embed-video">
                        <iframe src="https://www.youtube.com/embed/CPcS4HtrUEU" frameborder="0" allowfullscreen
                            uk-responsive></iframe>
                    </div>
                </li>

            </ul>



            <!-- video description contents -->
            <div class="p-lg-5 p-3">

                <h2> HTML Full Course - Build a Website Tutorial </h2>

                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-auto">
                        <span>299 views </span> • <span> Sep 18, 2019 </span>
                    </div>
                    <div class="uk-width-expand">

                        <nav class="responsive-tab">
                            <ul class="text-right">
                                <li><a href="#" uk-tooltip="title: Download; pos: top">
                                        <i class="icon-feather-download"></i>
                                        <span class="uk-visible@s">Download </span> </a>
                                </li>
                                <li><a href="#" uk-tooltip="title: Study With Another Person; pos: top">
                                        <i class="icon-line-awesome-group"></i>
                                        <span class="uk-visible@s">Join The Community </span> </a>
                                </li>
                            </ul>
                        </nav>


                    </div>
                </div>

                <hr class="my-2">

                <div  uk-toggle="cls: uk-flex uk-flex-between@m uk-flex-middle; mode: media; media: @m">
                    <div class="user-details-card">
                        <div class="user-details-card-avatar py-0">
                            <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-details-card-name">
                            Stella Johnson <span> Developer <span> 1 year ago </span> </span>
                        </div>
                    </div>
                    <div>
                        <strong class="mx-3 uk-visible@s"> Share on </strong>

                        <a href="#"
                            class="btn btn-facebook  rounded-circle btn-icon-only uk-margin-small-top">
                            <span class="btn-inner--icon">
                                <i class="icon-brand-facebook-f"></i>
                            </span>
                        </a>

                        <a href="#"
                            class="btn btn-twitter  rounded-circle btn-icon-only uk-margin-small-top">
                            <span class="btn-inner--icon">
                                <i class="icon-brand-twitter"></i>
                            </span>
                        </a>

                        <a href="#"
                            class="btn btn-google-plus rounded-circle btn-icon-only uk-margin-small-top">
                            <span class="btn-inner--icon">
                                <i class="icon-brand-google-plus-g"></i>
                            </span>
                        </a>

                    </div>
                </div>

                <h4 class="mt-4"> Description</h4>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod
                    tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                    consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                    doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <p> Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                    ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                    amet.</p>


            </div>






        </div>

        <!-- sidebar -->
        <div class="uk-width-1-4@m uk-overflow-hidden vidlist-3-container">


            <div uk-sticky>

                <h5 class="bg-gradient-grey text-white py-4 p-3 mb-0"> HTML Basics</h5>

                <ul class="uk-child-width-expand mb-0"
                    uk-switcher="animation: uk-animation-slide-right-small, uk-animation-slide-left-small"
                    uk-tab>
                    <li class="uk-active"><a href="#"> Contents</a></li>
                    <li><a href="#"> Details</a></li>
                </ul>

                <ul class="uk-switcher uk-overflow-hidden">

                    <!-- first tab -->

                    <li>

                        <div class="vidlist-3-content" data-simplebar>

                            <ul class="vidlist-3-section" uk-accordion>


                                <!--  section 1  -->
                                <li class="uk-open">
                                    <a class="uk-accordion-title" href="#"> Your First webpage </a>
                                    <div class="uk-accordion-content">
                                        <!-- vidlist -->
                                        <ul class="vidlist-3"
                                            uk-switcher="connect: #video-slider ; animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
                                            <li class="uk-active">
                                                <a href="#"> Creating First Page <span> 23 min </span> </a>
                                            </li>
                                            <li> <a href="#"> Headings in HTML <span> 23 min </span> </a> </li>
                                            <li> <a href="#"> The paragraph tag <span> 23 min </span> </a> </li>
                                            <li> <a href="#"> Emphasis and Strong Tag <span> 23 min </span> </a>
                                            </li>
                                            <li> <a href="#"> Text Formatting <span> 23 min </span> </a> </li>
                                            <li> <a href="#"> Working with Images <span> 23 min </span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <!--  section 2  -->

                                <li>
                                    <a class="uk-accordion-title" href="#"> Getting Started with HTML5 </a>
                                    <div class="uk-accordion-content">
                                        <!-- vidlist -->
                                        <ul class="vidlist-3">
                                            <li> <a href="course-lesson-3.html"> What Is HTML? <span> 2 min
                                                    </span>
                                                </a> </li>
                                            <li> <a href="course-lesson-3.html"> Introduction to HTML5 <span> 3
                                                        min
                                                    </span>
                                                </a>
                                            </li>
                                            <li> <a href="course-lesson-3.html"> Getting the Browser <span> 5
                                                        min
                                                    </span> </a>
                                            </li>
                                            <li> <a href="course-lesson-3.html"> Setting Up the Editor <span> 2
                                                        min
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <!--  section 3  -->

                                <li>
                                    <a class="uk-accordion-title" href="#"> Some Special Tags </a>
                                    <div class="uk-accordion-content">
                                        <!-- vidlist -->
                                        <ul class="vidlist-3">
                                            <li> <a href="course-lesson-3.html"> Inserting Images <span> 23 min
                                                    </span> </a> </li>
                                            <li> <a href="course-lesson-3.html"> Constructing Lists <span> 23
                                                        min </span> </a>
                                            </li>
                                            <li> <a href="course-lesson-3.html"> Horizontal Rule Tag <span> 23
                                                        min </span> </a>
                                            </li>
                                            <li> <a href="course-lesson-3.html"> Validation <span> 23 min
                                                    </span> </a> </li>
                                            <li> <a href="course-lesson-3.html"> Comments Tag <span> 23 min
                                                    </span> </a> </li>
                                        </ul>
                                    </div>
                                </li>

                                <!--  section 4  -->

                                <li>
                                    <a class="uk-accordion-title" href="#"> HTML Advanced level </a>
                                    <div class="uk-accordion-content">
                                        <!-- vidlist -->
                                        <ul class="vidlist-3">
                                            <li> <a href="course-lesson-3.html"> The Basics of Forms<span> 23
                                                        min </span> </a>
                                            </li>
                                            <li> <a href="course-lesson-3.html"> Link Targets <span> 23 min
                                                    </span> </a> </li>
                                            <li> <a href="course-lesson-3.html"> HTML Iframes <span> 23 min
                                                    </span> </a> </li>
                                            <li> <a href="course-lesson-3.html"> The End <span> 23 min </span>
                                                </a> </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>

                        </div>


                    </li>


                    <!-- seccond tab -->

                    <li>

                        <img src="../assets/images/course/8.png" alt="">
                        <div class="p-3">

                            <ul class="uk-list">
                                <li> <i class="icon-feather-clock"></i> 2 Hours and 8 minutes </li>
                                <li> <i class="icon-feather-users"></i> Eneroled 13 students </li>
                            </ul>

                            <br>

                            <h6> Description</h6>
                            <p>HTML is the building blocks of the web. It gives pages structure and applies
                                meaning to content. Take this course to learn how it all works and create your
                                own pages!</p>

                        </div>

                    </li>


                </ul>


            </div>

        </div>


        <!-- small device icon video sidebar -->
        <span class="btn-vidlist-3" uk-toggle="target: #wrapper; cls: is-open"></span>

    </div>


</div>

@endsection
