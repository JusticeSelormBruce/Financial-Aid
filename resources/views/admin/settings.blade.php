@extends('layouts.admin')
@section('render')

    <div class="container pt-5">
        <div class="jumbotron">
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
            <?php
            $year = date("Y");
            $previousYear = $year - 1;
            $accademicYear = (string)$previousYear . "/" . $year;
            ?>
            <div class="row">
                <div class="mx-auto mx-50">
                    <div class="jumbotron">
                        <div class="caption h5">
                            <span class="mx-5"> Application  for  {{$accademicYear}} Academic Year is Currently</span>
                        </div>
                        <form action="/admin/change-application-status" method="post">
                            @csrf
                            @if($state->status == 1)
                                <div class="input-group-sm">
                                    <select name="status" id="" class="form-control" onchange="this.form.submit()">
                                        <option value="1"> Opened</option>
                                        <option value="0"> Closed</option>
                                    </select>
                                </div>

                            @else
                                <div class="input-group-sm">
                                    <select name="status" id="" class="form-control" onchange="this.form.submit()">
                                        <option value="0"> Closed</option>
                                        <option value="1"> Opened</option>
                                    </select>
                                </div>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
