@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Welcome {{ \Auth::user()->name }}</h3>
		</div>
	</div>

@endsection