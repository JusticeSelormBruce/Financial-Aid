@extends('layouts.applicant')
@section('render')

<div class="container-fluid">
    <div class="jumbotron">
        @if ($score  == null)
        <form action="/preview" method="POST">
            @csrf
           @include('admin.questionnaire.form')
           <div class="row pt-2">
               <div class="mx-auto">
                   <button class="btn btn-primary btn-sm" type="submit"><span class="mx-2">Submit Form</span></button>
               </div>
           </div>
        </form>
        @else
                <div class="alert alert-success" role="alert">
                  <div class="row">
                      <div class="mx-auto"> <h3>Hello    {{ $applicant->student_name }} ,</h3> <span> you have already applied for this academic year, Kindly check your application status</span></div>
                  </div>
                </div>
                <div class="row pt-5">
                    <div class="mx-auto">
                        <a href="/my-application" class="btn btn-primary btn-lg"> My Applications</a>
                    </div>
                </div>
        @endif

    </div>
</div>
@endsection
