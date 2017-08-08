@extends('layout')


@section('content')
	
	<table class="table">
		@foreach($tasks as $task)
		<tr>
			<td><input type="checkbox" name="isComplete" 
			onclick="location.href='{{ url('/mark/'.$task->id) }}'" {{ $task->isComplete?'checked':''}}></td>
			<td><a href="/tasks/{{$task->id}}">{{ $task->body }}</a></td>
			<td><a href="{{ URL::route('delete', $task->id)}}">(x)</a></td>
		</tr>
		@endforeach
	</table>

 	<input class="btn btn-default" type="button" name="create" value="Add a new task" onclick="location.href='{{url('/tasks/create')}}'">
@endsection