@extends('admin.master')
@section('body')

<center><h2>Welcome,  {{Auth::user()->name}} </h2></center>

<center><p>List & manage Your Todo task with Todolist.</p></center>
@endsection