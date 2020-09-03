@extends('layouts.admin')
@section('render')
<div class="container-fluid mt-5">
    <div class="alert alert-success " role="alert">

      <div class="row">
        Qalified Applicant
          <div class="ml-auto">@include('admin.account.load_amount')</div>
      </div>
       </div>
    <div class="jumbotron">
@include('common.alert')
        <table id="table_id" class=" table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Applicant Name</th>
                    <th>Applicant Index Number</th>
                    <th>Program</th>
                    <th>Level</th>
                    <th>Porverty Survey Score</th>
                    <th>Application Date & Time</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($qualifiedApplicants as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->student->student_name}}</td>
            <td>{{$item->student->index_number}}</td>
            <td>{{$item->student->program}}</td>
            <td>{{$item->student->level}}</td>
            <td class="bg-success">{{
                round((100) - ($item->score/ 700)*100 ,0)
            }}%</td>
            <td>{{$item->created_at}}</td>
           
        </tr>
                        @endforeach
            </tbody>

        </table>
    </div>
</div>



@endsection

