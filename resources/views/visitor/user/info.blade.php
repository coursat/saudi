@extends("container")
@section('page_title', 'Account info')
@section("content")
<div class="page-content-inner">



    <h2>Profile</h2>

    <div uk-grid>
        <div class="uk-width-2-5@m">

            <div class="uk-card-default rounded text-center p-4">

                <div class="user-profile-photo  m-auto">
                <img src="{{url('')}}/assets/images/avatars/home-profile.jpg" alt="">
                </div>

                <h4 class="mb-2 mt-3"> Mohammed Hamdy</h4>
                <p class="m-0"> Member since Sep 23 2017 </p>

            </div>

            <div class="uk-card-default rounded mt-5">
                <div class="uk-flex uk-flex-between uk-flex-middle py-3 px-4">
                    <h5 class="mb-0"> Communities </h4>
                        <a href="#"> more </a>
                </div>
                <hr class="m-0">
                <div class="p-3">
                    <a href="#" class="profile-list-item">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>

                        <div class="uk-width-auto">
                            <button type="button" class="btn btn-danger btn-icon-only">
                                <span class="d-flex justify-content-center">
                           <i class="icon-brand-angular icon-small"></i>
                                </span>
                              </button>
                        </div>
                        <div class="uk-width-expand">
                            <h5 class="mb-2"> Angular </h5>
                            <div class="course-progressbar">
                                <div class="course-progressbar-filler" style="width:100%"></div>
                            </div>
                        </div>

                    </div>
                    </a>
                    <a href="#" class="profile-list-item">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>

                        <div class="uk-width-auto">
                            <button type="button" class="btn btn-warning btn-icon-only">
                                <span class="d-flex justify-content-center">
                                    <i class="icon-brand-html5 icon-small"></i>
                                </span>
                              </button>
                        </div>
                        <div class="uk-width-expand">
                            <h5 class="mb-2"> html5 </h5>
                            <div class="course-progressbar">
                                <div class="course-progressbar-filler" style="width:35%"></div>
                            </div>
                        </div>

                    </div>
                    </a>
                    <a href="#" class="profile-list-item">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>

                        <div class="uk-width-auto">
                            <button type="button" class="btn btn-primary btn-icon-only">
                                <span class="d-flex justify-content-center">
                                    <i class="icon-brand-css3-alt icon-small"></i>
                                </span>
                              </button>
                        </div>
                        <div class="uk-width-expand">
                            <h5 class="mb-2"> css3 </h5>
                            <div class="course-progressbar">
                                <div class="course-progressbar-filler" style="width:65%"></div>
                            </div>
                        </div>

                    </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="uk-width-expand@m">

            <div class="uk-card-default rounded">
                <div class="uk-flex uk-flex-between uk-flex-middle py-3 px-4">
                    <h5 class="mb-0"> Account details </h4>
                                <li><a href="{{url('/username/edit-profile')}}"><i class="uil-edit-alt"></i> <span>Edit</span> </a>
                                </li>
                </div>
                <hr class="m-0">
                <div class="uk-child-width-1-2@s uk-grid-small p-4" uk-grid>
                    <div>
                        <h6 class="uk-text-bold"> First Name </h5>
                            <p> Elie </p>
                    </div>
                    <div>
                        <h6 class="uk-text-bold"> Seccond Name </h5>
                            <p> Elie </p>
                    </div>
                    <div>
                        <h6 class="uk-text-bold"> Your email address </h5>
                            <p> eliedaniels@gmail.com </p>
                    </div>
                    <div>
                        <h6 class="uk-text-bold"> Phone </h5>
                            <p> +1 555 623 568 </p>
                    </div>

                </div>
            </div>

            <div class="uk-card-default rounded mt-5">
                <div class="uk-flex uk-flex-between uk-flex-middle py-3 px-4">
                    <h5 class="mb-0"> Running Courses </h4>
                        <a href=""> More </a>
                </div>
                <hr class="m-0">
                <div class="p-3">

                    <a href="#" class="profile-list-item">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>

                        <div class="uk-width-auto">
                            <button type="button" class="btn btn-primary btn-icon-only">
                                <span class="d-flex justify-content-center">
                                    <i class="icon-brand-css3-alt icon-small"></i>
                                </span>
                              </button>
                        </div>
                        <div class="uk-width-expand">
                            <h5 class="mb-2"> css3 </h5>
                            <div class="course-progressbar">
                                <div class="course-progressbar-filler" style="width:65%"></div>
                            </div>
                        </div>

                    </div>
                    </a>
                </div>
            </div>

        </div>
    </div>





</div>

@endsection
