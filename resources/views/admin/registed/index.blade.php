@extends('layouts.admin')
@section('render')
<div class="container pt-5">
    @include('common.alert')
    <div class="jumbotron">
        <div class="row">
            <div class="ml-auto">@include('admin.registed.upload')</div>
        </div>
        @include('admin.registed.list')
    </div>
</div>

@endsection
