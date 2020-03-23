@extends("container")
@section('page_title', 'Profile')
@section("content")

<div class="space-40"></div>
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

        <ul class=" uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">2:39</span>
                            <img src="../assets/images/episodes/2.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> Creating sticky in HTML </h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">5:39</span>
                            <img src="../assets/images/episodes/3.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> er Creating a Laravel Package </h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">5:39</span>
                            <img src="../assets/images/episodes/1.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> The PHP Singleton class </h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">2:39</span>
                            <img src="../assets/images/episodes/5.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> Dev Design Quickie </h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">2:39</span>
                            <img src="../assets/images/episodes/2.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> Creating sticky in HTML </h4>
                        </div>
                    </div>
                </a>
            </li>
        </ul>


    </li>

    <!-- tab 2 -->
    <li class="" style="">

        <ul class=" uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">2:39</span>
                            <img src="../assets/images/episodes/2.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> Creating sticky in HTML </h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">5:39</span>
                            <img src="../assets/images/episodes/3.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> er Creating a Laravel Package </h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">5:39</span>
                            <img src="../assets/images/episodes/1.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> The PHP Singleton class </h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">2:39</span>
                            <img src="../assets/images/episodes/5.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> Dev Design Quickie </h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="episode-details.html">
                    <div class="course-card episode-card animate-this">
                        <div class="course-card-thumbnail ">

                            <span class="duration">2:39</span>
                            <img src="../assets/images/episodes/2.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <h4 class="mb-0"> Creating sticky in HTML </h4>
                        </div>
                    </div>
                </a>
            </li>
        </ul>


    </li>

    <!-- tab 3 -->
    <li class="" style="">
        <div class="space-40"></div>
        <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-grid communities" uk-grid="" id="book-popular">
            <div class="uk-grid-margin">
                <div class="book-popular-card">
                    <img src="../assets/images/book/css3.jpg" alt="" class="cover-img">
                    <div class="book-details">

                            <h4>CSS3 Web Development</h4>

                        <p><span class="uil-user-circle"></span> 3620 Members </p>
                        <a href="#" style="color:white !important;" class="link-open" ><span class="open-btn">Open <i class="icon-feather-log-in"></i></span></a>
                    </div>
                     <i style="color:white !important;" class="icon-material-outline-group community-icon"></i>
                </div>
            </div>

            <div class="uk-grid-margin">
                <div class="book-popular-card">
                    <img src="../assets/images/book/css3.jpg" alt="" class="cover-img">
                    <div class="book-details">

                            <h4>CSS3 Web Development</h4>

                        <p><span class="uil-user-circle"></span> 3620 Members </p>
                        <a href="#" style="color:white !important;" class="link-open" ><span class="open-btn">Open <i class="icon-feather-log-in"></i></span></a>
                    </div>
                    <i style="color:white !important;" class="icon-material-outline-group community-icon"></i>
                </div>
            </div>

            <div class="uk-grid-margin">
                <div class="book-popular-card">
                    <img src="../assets/images/book/css3.jpg" alt="" class="cover-img">
                    <div class="book-details">

                            <h4>CSS3 Web Development</h4>

                        <p><span class="uil-user-circle"></span> 3620 Members </p>
                        <a href="#" style="color:white !important;" class="link-open" ><span class="open-btn">Open <i class="icon-feather-log-in"></i></span></a>
                    </div>
                    <i style="color:white !important;" class="icon-material-outline-group community-icon"></i>
                </div>
            </div>

            <div class="uk-grid-margin">
                <div class="book-popular-card">
                    <img src="../assets/images/book/css3.jpg" alt="" class="cover-img">
                    <div class="book-details">

                            <h4>CSS3 Web Development</h4>

                        <p><span class="uil-user-circle"></span> 3620 Members </p>
                        <a href="#" style="color:white !important;" class="link-open" ><span class="open-btn">Open <i class="icon-feather-log-in"></i></span></a>
                    </div>
                    <i style="color:white !important;" class="icon-material-outline-group community-icon"></i>
                </div>
            </div>


        </div>
    </li>

</ul>
@endsection
