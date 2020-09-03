
@extends('layouts.applicant')
@section('render')
<div class="container mt-5">
    <div class="jumbtron">

        <div class="alert alert-success" role="alert">
            <div class="row">
                <div class="mx-auto">
                    Account Balance:  <span class="mx-2 h5"><b>{{$account->sum('amount')}}</b></span>
                </div>
            </div>
         </div>
      
    </div>
</div>

@endsection
