@extends('admin.master')

@section('body')
<br/>

<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4 class="text-center text-success">TODOList</h4>
            </div>
            <div class="panel-body">
                <h3 class="text-center text-success" ></h3>
                <table class="table table-bordered">
                     <tr class="bg-primary">
                        <th> Task No </th>
                        <th> Task Name </th>
                        <th> Completion Date</th>
                        <th> Status </th>
                        <th> Action </th>
                     </tr>
                     @php($i=1)
                     @foreach($tasks as $task)
                     <tr>
                        <td>{{ $i++ }} </td>
                        <td>{{ $task->task_name }}</td>
                        <td>{{ $task->completion_date}}</td>
                        <td>{{ $task->completion_status == 1? 'Done' : 'Undone' }}</td>
                        <td>
                            @if($task->completion_status == 1)
                                <a href="{{ route('undone-task',['id'=>$task->id]) }}" class="btn btn-info btn-xs">
                                    <span class="glyphicon glyphicon-arrow-up"> </span>
                                </a>
                            @else 
                                <a href = "{{ route('done-task',['id'=>$task->id]) }}" class="btn btn-warning btn-xs">
                                    <span class="glyphicon glyphicon-arrow-down"> </span>
                                </a>
                            @endif
                            <a href = "{{ route('edit-task',['id'=>$task->id]) }}" class="btn btn-success btn-xs">
                                <span class="glyphicon glyphicon-edit"> </span>
                            </a>

                            <a href = "{{ route('delete-task',['id'=>$task->id]) }}" class="btn btn-danger btn-xs">
                                <span class="glyphicon glyphicon-trash"> </span>
                            </a>
                        </td>
                     </tr>
                     @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection