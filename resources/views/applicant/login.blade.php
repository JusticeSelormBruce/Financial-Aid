@extends('layouts.landingpage')
@section('content')


    <style>
        .card {
            height: 50vh !important;
        }
        a{
            text-decoration: none!important;
        }
    </style>
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    @include('common.alert')
                    <div class=" row  py-5">
                        <div class="mx-auto">
                            <span class="text-light h1"> Online Financial Aid System</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto py-2">
                            <div class=" h2 text-light"><span class="text-light">Applicant Login Page</span></div>
                        </div>
                    </div>
                    <div class="">
                        <form method="POST" action="/login-applicant">
                            @csrf

                            <div class="form-group row pt-5">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Index Number') }}</label>

                                <div class="col-md-6 pb-3">
                                    <input  type="text"
                                           class="form-control " name="index_number"
                                           value="{{ old('index_number') }}" required autofocus>
                                </div>
                          
                                <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __(' Password') }}</label>
                                <div class="col-md-6">
                                    <input  type="password"
                                           class="form-control " name="password"
                                           value="{{ old('index_number') }}" required autofocus>
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="mx-auto">
                                    <div class="row ">
                                        <div class="col-lg-4 col-md-4col-sm-12">
                                            <button type="submit" class="btn btn-outline-dark ">
                                                <span class=" text-light ">  {{ __('Login') }}</span>
                                            </button>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


