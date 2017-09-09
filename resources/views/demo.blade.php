
<ul>
@foreach($tasks as $task)

	<li><a href='/tasks/{{$task->id}}'>{{$task->name}}</a></li>

@endforeach
</ul>