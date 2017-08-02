@extends('layout')

@section('content')
<h1>Create a new task</h1>
<form method="POST" action="/tasks">
	{{ csrf_field() }}
	
	<input type="text" name="body">
	<input type="submit" name="submit" value="Add">
</form>
@endsection