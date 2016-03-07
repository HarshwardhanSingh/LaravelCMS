@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h3>Sign In</h3>
		<hr/>
		@if($errors->count())
			<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		@endif
		{!! Form::open(array('route' => 'handlelogin')) !!}
			<div class="form-group">
				{!! Form::label('email') !!}
				{!! Form::text('email',null,array('class' => 'form-control', 'placeholder' => 'Email')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('password') !!}
				{!! Form::password('password',array('class' => 'form-control', 'placeholder' => 'Password')) !!}
			</div>

			<div class="form-action">
				{!! Form::token() !!}
				{!! Form::submit("Sign In",array('class' => 'btn btn-primary')) !!}
			</div>
		{!! Form::close() !!}
	</div>
</div>


@endsection