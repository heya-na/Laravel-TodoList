@extends('layout')


@section('content')
	<ul>
		@foreach($tasks as $task)
			<li><a href="/tasks/{{$task->id}}">{{ $task->body }}</a><a href="{{ URL::route('delete', $task->id)}}">(x)</a></li>
			
		@endforeach
	</ul>
@endsection