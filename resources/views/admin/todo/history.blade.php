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
                <form action="{{ route('clear-history') }}"method="GET" class="form-horizontal">
                @csrf
                <table class="table table-bordered">
                     <tr class="bg-primary">
                        <th> Task No </th>
                        <th> Task Name </th>
                        <th> Completion Date</th>
                        <th> Status </th>
                
                     </tr>
                     @php($i=1)
                     @foreach($tasks as $task)
                     <tr>
                        <td>{{ $i++ }} </td>
                        <td>{{ $task->task_name }}</td>
                        <td>{{ $task->completion_date}}</td>
                        <td>{{ $task->completion_status == 1? 'Done' : 'Undone' }}</td>
     
                     </tr>
                     @endforeach
                </table>
                <div class="col-md-2 col-md-offset-10">
                <input type="submit" name="btn" value="Clear History" class="btn btn-success btn-block"/>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection