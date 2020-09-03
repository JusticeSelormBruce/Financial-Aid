
<div class="container mt-5">
    <div class="jumbotron-fluid ">

        <table id="table_id" class="table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>program</th>
            <th>level</th>
            <th>Index Number</th>
            <th>Registration Status</th>
            <th>semester</th>
            <th>cgpa</th>
            <th>Date and Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $studentlist as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->student_name}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->program}}</td>
                    <td>{{$item->level}}</td>
                    <td>{{$item->index_number}}</td>
                    <td>
                        @if ($item->registered == 0)
                        <span>Not Registed</span>
                    @else
                    <span>Registed</span>
                    @endif
                </td>
                    <td>{{$item->semester}}</td>
                    <td>{{$item->cgpa}} </td>
                    <td>{{$item->created_at}}</td>


                </tr>

        @endforeach
    </tbody>
</table>


    </div>
</div>
