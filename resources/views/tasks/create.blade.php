@extends('layout')

@section('content')
<div>
	<h1 class="cover-heading">Create a new task</h1>
	<form method="POST" action="/tasks">
	
	{{ csrf_field() }}

	  <div class="form-group">
	    <input type="text" class="form-control" id="body" name="body">
	  </div>
	  <button type="submit" name="submit" class="btn btn-default">Add</button>
	</form>
</div>

@include('layouts.errors')

@endsection