@extends('layouts.landingpage')

@section('content')
<style>
    img{
        width: 6vw!important;
    }

    .card{
       background-color: #5a6268!important;
       border: none!important;
    }
</style>
    <div class="container mt-5">
        <div class="card h-100">
            <div class="mx-auto">
             <div class="card-title h1 text-light">Koforidua Technical University</div>
             <div  class="pt-2 mx-5">
             <div class="ml-5"><img src="{{asset('icons/logo-round.png')}}" alt=""></div>
             </div>
            </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <div class=" row  py-5">
                        <div class="mx-auto">
                            <span class="text-light h3"> Online Financial Aid System</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto py-2">
                            <div class=" h2 text-light">{{ __('Login') }}</div>
                        </div>
                    </div>
                    <div class="">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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

                                        <div class="col-lg-8 col-md-8 col-sm-12 form-group">
                                            <a href="/applicant/loginpage"  class="btn btn-outline-dark ">
                                                <span class=" text-light">  Login as Applicant </span>
                                            </a>
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
