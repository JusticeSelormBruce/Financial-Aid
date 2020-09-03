<style>
    a {
        text-decoration: none !important;
    }

    .card {
        height: 25vh !important;
    }

    .card-header {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
        Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
        "Apple Color Emoji", "Segoe UI Emoji",
        "Segoe UI Symbol", "Noto Color Emoji";
    }

    .lead {
        font-size: large !important;
    }

</style>
@extends('layouts.applicant')
@section('render')

<div class="container mt-5">
    @include('common.alert')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 bg-light">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-5">
                        <div class="mx-auto">
                            <a href="/applicant-announcement-page" class="lead"> Announcements</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 " style="background-color: yellow">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-5">
                        <div class="mx-auto">
                            <a href="/my-application" class="lead"> My Applications</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 " style="background-color: green">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-5">
                        <div class="mx-auto">
                            <a href="/application-check-index" class="lead"> New   Application </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 ">
            <div class="card w-100 h-50 bg-info">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-5">
                        <div class="mx-auto">
                            <a href="/my-account" class="lead">My Account</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
