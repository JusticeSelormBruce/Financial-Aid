
@extends('layouts.applicant')
@section('render')

<div class="container-fluid pt-5">
<div class="jumbotron">

    <table  id ="table_id"class="table-striped table">

            <thead>
                <tr>

                    <th> Name</th>
                    <th> Gender</th>
                    <th> Index Number</th>
                    <th>Program</th>
                    <th>Level</th>
                    <th>cgpa</th>
                    <th>Porverty Survey Score</th>
                    <th>Application Status</th>
                    <th>Application Date & Time</th>
                 


                </tr>
            </thead>
            <tbody>
                @foreach ($myapplication as $item)

        <tr>

            <td>{{$item->student->student_name}}</td>
            <td>{{$item->student->gender}}</td>
            <td>{{$item->student->index_number}}</td>
            <td>{{$item->student->program}}</td>
            <td>{{$item->student->level}}</td>
            <td>{{$item->student->cgpa}}</td>
            <td> <span class="ml-5">{{ceil(((100) - ($myscore['score']/ 700)*100))}}%</span></td>
            <td class="bg-success">
                @if ($item->status ==0)
                                Application Submited
                @else
                        Qualified
                @endif
            </td>
            <td>{{$item->created_at}}</td>

        </tr>
                        @endforeach
            </tbody>


    </table>

</div>
</div>
@endsection
