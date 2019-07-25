@extends('admin.master')

@section('body')
<br/>
<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center text-success">Add Your List</h4>
            </div>
            <div class="panel-body">
                <h3 class="text-center text-success" id='xyz'> {{ Session :: get('message') }} </h3>
                <form action="{{ route('save-task') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Task</label>
                        <div class="col-md-7">
                             <input type="text" name="task_name" class="form-control  {{  $errors-> has('task_name') ? $errors->first('task_name') : ' '}}" required autofocus>
                            <span class="text-danger">{{ $errors->first('task_name') }}  </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Completion Date</label>
                        <div class="col-md-3">
                            <input type="date" name="completion_date" class="form-control  {{  $errors-> has('completion_date') ? $errors->first('completion_date') : ' '}}" required autofocus>
                            <span class="text-danger">
                                <strong>{{ $errors->first('completion_date') }}</strong>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Completion status</label>
                        <div class="col-md-9 radio">
                            <!--label><input type="radio" name="completion_status" value="1"/>Done</label-->
                            <label><input type="radio" name="completion_status" value="0" required autofocus>Undone</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-3">
                            <input type="submit" name="btn" value="2DoListed" class="btn btn-success btn-block"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection