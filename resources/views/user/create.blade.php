@extends('layouts.principal')

@section('title', 'Sign In')

@section('content')
	{!!Form::open(['route'=>'user.store', 'method'=>'POST'])!!}
		<div class="form-group">
			{!! Form::label('Username:') !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter Username']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('E-mail:') !!}
			{!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter E-mail']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('Password:') !!}
			{!! Form::password('pass', ['class'=>'form-control', 'placeholder'=>'Enter Password']) !!}
		</div>
		{!! Form::submit('Sign In', ['class'=>'btn btn-primary']) !!}
	{!!Form::close()!!}
	
@endsection