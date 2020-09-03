
@extends('layouts.admin')
@section('render')
<div class="container mt-5">
    <div class="jumbotron">
@include('common.alert')
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card w-100 h-50 " style="background-color: green">
                    <div class="card-header"></div>
                    <div class="card-body" style="background-color: #3c4858">
                        <div class=" row py-5">
                            <div class="mx-auto">
                                <a href="/admin/creadit-student-account-index" class="lead btn text-primary"> Credit Student Account</a>
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
                             @include('admin.account.account_details')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="jumbotron">

        <div class="row">
            <div class="col">
                <div class="card w-100 bg-danger ">
                    <div class="card-header"></div>
                    <div class="card-body" style="background-color: #3c4858">
                        <div class=" row py-5">
                            <div class="mx-auto">
                                <a href="/admin/creadit-student-account-index" class="lead"> Credit Student Account</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        
        </div>
    </div> --}}
</div>
@endsection
