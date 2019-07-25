@extends('admin.master')

@section('body')
<br/>
<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center text-success">Add Task</h4>
            </div>
            <div class="panel-body">
                <h3 class="text-center text-success"> {{ Session :: get('message') }} </h3>
                <form action="{{ route('update-task')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Task Name</label>
                        <div class="col-md-8">
                            <input type="text" name="task_name" value = " {{ $task->task_name  }}" class="form-control"/>
                            <input type="hidden" name="task_id" value = " {{ $task->id  }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Completion Date</label>
                        <div class="col-md-4">
                            <input type="date" name="completion_date" class="form-control"/>
                            <span class="text-danger"> {{  $errors-> has('completion_date') ? $errors->first('completion_date') : ' '}}</span>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label class="control-label col-md-3">Completion status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="completion_status" {{ $task->completion_status == 1 ? 'checked' : '' }} value="1"/>Done</label>
                            <label><input type="radio" name="completion_status"{{ $task->completion_status == 0 ? 'checked' : '' }} value="0"/> Undone</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-3">
                            <input type="submit" name="btn" value="Update List" class="btn btn-success btn-block"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection