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

<div class="container pt-5">

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 bg-light">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-5">
                        <div class="mx-auto">
                            <a href="{{route('announcement')}}" class="lead"> Announcements</a>
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
                            <a href="/admin/registed-index" class="lead"> Applicants</a>
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
                            <a href="/incoming-applications" class="lead">Qualified Applications</a>
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
                            <a href="/admin/questionnaires-index" class="lead">Questionnnaiere </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 bg-danger ">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-5">
                        <div class="mx-auto">
                            <a href="/admin/accounts" class="lead"> Accounts</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 bg-primary">
                <div class="card-header"></div>
                
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-5">
                        <div class="mx-auto">
                            <a href="/admin/settings" class="lead"> Settings</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
