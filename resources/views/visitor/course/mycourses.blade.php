@extends("container")
@section('page_title', 'My Courses')
@section("content")


<div class="bg-grey  uk-light uk-padding pb-0 rounded shadow">
    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
             <div class="uk-card uk-card-default uk-card-body bg-grey">
                <h1><span class="uk-text-background">40</span><i class="icon-line-awesome-heart-o"></i></h1>
                <h6><span class="uk-text-background"></span>Favourite Courses</h6>
             </div>
        </div>

         <div>
            <div class="uk-card uk-card-default uk-card-body bg-grey">
                <h1><span class="uk-text-background"> 20 </span><i class="icon-feather-eye"></i> </h1>
                <h6><span class="uk-text-background"></span>Running Courses</h6>
             </div>
        </div>

        <div>
            <div class="uk-card uk-card-default uk-card-body bg-grey">
                <h1><span class="uk-text-background">40</span><i class="icon-material-outline-group"></i></h1>
                <h6><span class="uk-text-background"></span>Communities</h6>
             </div>
        </div>

    </div><br>
    <ul class="uk-tab" uk-switcher="connect: #component-tab-left; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
        <li class="uk-active"><a href="#" aria-expanded="true"><i class="icon-line-awesome-heart-o mr-2"></i>Favourite </a></li>
        <li class=""><a href="#" aria-expanded="false"> <i class="icon-feather-eye mr-2"></i> Running</a></li>
        <li class=""><a href="#" aria-expanded="false"> <i class="icon-material-outline-group mr-2"></i> Communities</a></li>
    </ul>
</div>
<ul class="uk-switcher uk-margin" id="component-tab-left" style="touch-action: pan-y pinch-zoom;">
    <!-- tab 1 -->
    <li class="uk-active  " style="">

        <div class="uk-child-width-1-3@s uk-child-width-1-4@m" uk-grid>
            <div>
            <a href="{{url('/subjects/courses')}}" class="skill-card">
                    <i class="icon-brand-angular skill-card-icon" style="color:#dd0031"></i>
                    <div>
                        <h2 class="skill-card-title"> Front End Courses</h2>
                        <p class="skill-card-subtitle"> 15 courses <span class="skill-card-bullet"></span> 3
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-js-square skill-card-icon" style="color:#f7df1e"></i>
                    <div>
                        <h2 class="skill-card-title"> Angular Courses</h2>
                        <p class="skill-card-subtitle"> 2 courses <span class="skill-card-bullet"></span> 13
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-html5 skill-card-icon" style="color:#f0653f"></i>
                    <div>
                        <h2 class="skill-card-title"> Angular Courses</h2>
                        <p class="skill-card-subtitle"> 3 courses <span class="skill-card-bullet"></span> 4
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-node-js skill-card-icon" style="color:#64d25d"></i>
                    <div>
                        <h2 class="skill-card-title"> NodeJS Courses</h2>
                        <p class="skill-card-subtitle"> 6 courses <span class="skill-card-bullet"></span> 4
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-css3-alt skill-card-icon" style="color:#0018ca"></i>
                    <div>
                        <h2 class="skill-card-title"> CSS3 Courses</h2>
                        <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-react skill-card-icon" style="color:#74defb"></i>
                    <div>
                        <h2 class="skill-card-title"> react Courses</h2>
                        <p class="skill-card-subtitle"> 12 courses <span class="skill-card-bullet"></span> 2
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-python skill-card-icon" style="color:#154f5f"></i>
                    <div>
                        <h2 class="skill-card-title"> Python Courses</h2>
                        <p class="skill-card-subtitle"> 12 courses <span class="skill-card-bullet"></span> 4
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-vuejs skill-card-icon" style="color:#0bd36f"></i>
                    <div>
                        <h2 class="skill-card-title"> Vuejs Courses</h2>
                        <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-angular skill-card-icon" style="color:#dd0031"></i>
                    <div>
                        <h2 class="skill-card-title"> Java Courses</h2>
                        <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-js-square skill-card-icon" style="color:#f7df1e"></i>
                    <div>
                        <h2 class="skill-card-title"> Angular Courses</h2>
                        <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-html5 skill-card-icon" style="color:#f0653f"></i>
                    <div>
                        <h2 class="skill-card-title"> Angular Courses</h2>
                        <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                            bundles
                        </p>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-path-level.html" class="skill-card">
                    <i class="icon-brand-node-js skill-card-icon" style="color:#64d25d"></i>
                    <div>
                        <h2 class="skill-card-title"> NodeJS Courses</h2>
                        <p class="skill-card-subtitle"> 5 courses <span class="skill-card-bullet"></span> 3
                            bundles
                        </p>
                    </div>
                </a>
            </div>
        </div>

    </li>

    <!-- tab 2 -->
    <li class="" style="">


    </li>

    <!-- tab 3 -->
    <li class="" style="">


    </li>

</ul>
@endsection
