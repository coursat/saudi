@extends("container")
@section('page_title', 'My Courses')
@section("content")


<h4>Account Setting</h4>

<nav class="responsive-tab mb-4">
    <li class="uk-active"><a href="#">Account</a></li>
    <li><a href="#">Billing</a></li>
    <li><a href="#">Setting</a></li>
</nav>

<div uk-grid>

    <div class="uk-width-2-5@m uk-flex-last@m">

        <div class="uk-card-default rounded text-center p-4">
            <div class="uk-position-relative my-4">

                    <div class="user-profile-photo  m-auto">
                        <img src="../assets/images/avatars/home-profile.jpg" alt="">
                    </div>



                <div class="uk-position-center">
                    <div uk-form-custom>
                        <input type="file">
                        <span class="uk-link icon-feather-camera icon-medium text-white"> </span>
                    </div>

                </div>
            </div>

            <a class="btn btn-default m-auto mb-3">Save photo</a>

        </div>
    </div>
    <div class="uk-width-expand@m">

        <div class="uk-card-default rounded">
            <div class="p-3">
                <h5 class="mb-0"> Contact info </h5>
            </div>
            <hr class="m-0">
            <form class="uk-child-width-1-2@s uk-grid-small p-4" uk-grid>
                <div>
                    <h5 class="uk-text-bold mb-2"> First Name </h5>
                    <input type="text" class="uk-input" placeholder="Your name">
                </div>
                <div>
                    <h5 class="uk-text-bold mb-2"> Seccond Name </h5>
                    <input type="text" class="uk-input" placeholder="Your seccond">
                </div>
                <div>
                    <h5 class="uk-text-bold mb-2"> Your email address </h5>
                    <input type="text" class="uk-input" placeholder="eliedaniels@gmail.com">
                </div>
                <div>
                    <h5 class="uk-text-bold mb-2"> Phone </h5>
                    <input type="text" class="uk-input" placeholder="+1 555 623 568 ">
                </div>
            </form>

            <div class="uk-flex uk-flex-right p-4">
                <button class="btn btn-link mr-2">Cancle</button>
                <button class="btn btn-default grey">Save Changes</button>
            </div>
        </div>

        <div class="uk-card-default rounded mt-4">
            <div class="p-3">
                <h5 class="mb-0"> Billing address </h4>
            </div>
            <hr class="m-0">
            <form class="uk-child-width-1-2@s uk-grid-small p-4" uk-grid>
                <div>
                    <h5 class="uk-text-bold mb-2"> Number </h5>
                    <input type="text" class="uk-input" placeholder="23, Block C2 ">
                </div>
                <div>
                    <h5 class="uk-text-bold mb-2"> Street </h5>
                    <input type="text" class="uk-input" placeholder="Street Number">
                </div>
                <div>
                    <h5 class="uk-text-bold mb-2"> City </h5>
                    <input type="text" class="uk-input" placeholder="City Name">
                </div>
                <div>
                    <h5 class="uk-text-bold mb-2"> Postal Code </h5>
                    <input type="text" class="uk-input" placeholder="Postal Code">
                </div>
                <div>
                    <h5 class="uk-text-bold mb-2"> State </h5>
                    <input type="text" class="uk-input" placeholder="State">
                </div>
                <div>
                    <h5 class="uk-text-bold mb-2"> Country </h5>
                    <input type="text" class="uk-input" placeholder="Your Country">
                </div>

            </form>
            <div class="uk-flex uk-flex-right p-4">
                <button class="btn btn-link mr-2">Cancle</button>
                <button class="btn btn-default grey">Save Changes</button>
            </div>
        </div>

    </div>

</div>
@endsection
