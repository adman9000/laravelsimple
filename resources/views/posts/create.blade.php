@extends('layouts.master')

@section('content')

	<form method=post action='/posts'>
	{{csrf_field()}}

	<div class='form-group'>
		<label>Title</label>
		<input type='text' class='form-control' name='title' required />
	</div>

	<div class='form-group'>
		<label>Title</label>
		<textarea class='form-control' name='body' required ></textarea>
	</div>

	<div class='form-group'>
	<input type='submit' class='btn btn-primary' value='submit' />
	</div>
	</form>


	@if(count($errors))

		<div class='form-group'>
			<div class='alert alert-danger'>
				<ul>
					@foreach($errors->all() as $error) 
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		</div>

	@endif

@endsection
