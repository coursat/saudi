
     <!-- overlay seach on mobile-->
     <div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden
     style="z-index: 10000;">
     <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
         <form class="uk-search uk-search-navbar uk-width-1-1">
             <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
         </form>
     </div>
     <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade"
         href="#"></a>
 </div>

 <!-- search overlay-->
 <div id="searchbox">

     <div class="search-overlay"></div>

     <div class="search-input-wrapper">
         <div class="search-input-container">
             <div class="search-input-control">
                 <span class="icon-feather-x btn-close uk-animation-scale-up"
                     uk-toggle="target: #searchbox; cls: is-active"></span>
                 <div class=" uk-animation-slide-bottom">
                     <input type="text" name="search" autofocus required>
                     <p class="search-help">Type the name of the Course and book you are looking for</p>
                 </div>
             </div>
         </div>
     </div>

 </div>

   <!-- menu -->
    <div class="page-menu">
        <!-- btn close on small devices -->
        <span class="btn-menu-close" uk-toggle="target: #wrapper ; cls: mobile-active"></span>
        <!-- traiger btn -->

        <!-- logo -->
        <div class="logo uk-visible@s">
            <a href="dashboard.html"> <i class=" uil-graduation-hat"></i> <span> Courseplus</span> </a>
        </div>
        <div class="page-menu-inner" data-simplebar>
            <ul data-submenu-title="Browse">
                <li><a href="courses.html"><i class="uil-play-circle"></i> <span> Courses</span></a> </li>
            <li><a href="{{url('/subjects')}}"><i class="uil-youtube-alt"></i> <span> Subjects</span></a> </li>
            </ul>
            <ul data-submenu-title="User Account">
                <li><a href="user-profile.html"><i class="uil-user-circle"></i><span> Profile </span></a></li>
                <li><a href="user-profile-edit.html"><i class="uil-edit-alt"></i> <span>Account</span> </a>
                </li>
            </ul>

        </div>
    </div>
