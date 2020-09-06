@extends('layouts.admin')
@section('render')
<div class="container-fluid mt-5">
    <div class="alert alert-success " role="alert">
       Qualified Applications
       </div>
    <div class="jumbotron">
        <div class="row">
          
            <h3>Total Number of Applicantion</h3>  <span class="badge text-success mx-2"><h3>{{$scores->count()}}</h3></span>    <h3>Total Number of Qualified Applicant</h3>  <span class="badge text-success mx-2"><h3>{{$qualified->count()}}</h3></span>  
        
         {{-- <span class="mx-2"></span> <h3>Qualified Applicants</h3> <span class="badge text-warning mx-2">
            
             <h3>{{  $qualified}}</h3>
            </span> --}}
            {{-- <h3>Unqualified Applicants</h3> <span class="badge text-danger">
            
                <h3>{{ ($scores->count() -  $qualified)}}</h3>
               </span> --}}

           
        </div>

        <table id ="table_id"class="table-striped ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Applint Name</th>
                    <th>Gender</th>
                    <th> Index Number</th>
                    <th>Program</th>
                    <th>Level</th>
                    <th>Porverty Survey Score</th>
                    <th>Cgpa</th>
                    <th>Applicant Details</th>
                    <th>Application Date & Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($qualified as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->student->student_name}}</td>
            <td>{{$item->student->gender}}</td>
            <td>{{$item->student->index_number}}</td>
            <td>{{$item->student->program}}</td>
        
            <td>{{$item->student->level}}</td>
            <td>{{ceil(((100) - ($item->score/ 700)*100))}}%</td>
            <td>{{$item->student->cgpa}}</td>
            <td >
              
                @include('admin.application.more')
              
            </td>
            
              
            <td>{{$item->created_at}}</td>
           
        </tr>
                        @endforeach
            </tbody>
      
        </table>
    </div>
</div>


@endsection
