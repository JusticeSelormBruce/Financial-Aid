
@extends('layouts.applicant')
@section('render')
<div class="container pt-5">
         
    <div class="jumbotron">
        @include('common.alert')
        @if ($student == null)
        <form action="/save-student-details" method="POST" enctype="multipart/form-data">
            @csrf
            @include('applicant.student.form')
            <div class="row">
                <div class="mx-auto">
                    <button class="btn btn-success"> <span class="mx-4">Submit</span></button>
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