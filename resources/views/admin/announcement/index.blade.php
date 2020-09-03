@extends('layouts.admin')
@section('render')
    <div class="container-fluid pt-3 w-100">
        <div class="alert alert-primary py-1">
            <div class="row">
                <div class="ml-auto mx-5">
                    <a href="{{route('create_announcement')}}" class="text-light">New Announcement</a>
                </div>
            </div>
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
        @foreach($announcements as $list)
            <div class="jumbotron py-0">
                <div class="card">
                    <div class="card-header">
                        <div class="alert alert-success py-1">
                            <div class="row">
                                <div class="mr-auto mx-2"><b>Title:</b> <span class="card-text mx-2"><u>({{$list->title}})</u></span>
                                </div>
                                <div class="ml-auto mx-2 text-primary">@include('admin.announcement.show')</div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="alert alert-dark py-0">
                            <div class="row">
                                <div class="ml-auto mx-1">
                                    @if(Auth::user()->id ==$list->user->id)
                                        <a href="{{route('announcement.edit',['id'=>$list->id])}}" class="text-primary">Edit</a>  <span class="mx-2">@include('admin.announcement.delete')</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
