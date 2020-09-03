@extends('layouts.admin')
@section('render')
    <div class="container-fluid pt-3 w-100">
        <div class="alert alert-info py-1">
            <div class="row">
                <div class="mr-auto mx-5">
                    <a class="text-light" readonly="">Edit Announcement:</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="mx-auto w-100">
                    <div class="card py-5 shadow-sm">
                        <div class="ml-auto mx-5 mr-5">@include('admin.announcement.change_attachment')
                        </div>
                        @if(session()->has('msg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <div class="row">
                                    <div class="mx-auto w-50">
                                        {{session()->get('msg')}}
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form action="{{route('announcement.patch')}}" method="post"  enctype="multipart/form-data" >
                            @csrf
                            @include('admin.announcement.form')
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="row py-2">
                                <div class="mx-auto">
                                    <button class="btn btn-primary btn-sm" type="submit"><span class="mx-5">
                                            Update Announcement
                                </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
