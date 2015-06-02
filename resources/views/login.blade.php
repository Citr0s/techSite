@extends('layouts.master')

@section('content')
	<div class="container wideBox">
		<h1>Login</h1>
		<div class="form">
			<form method="POST" action="{{ url('/login') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="email">
				<input type="password" name="password" id="password" placeholder="password">
				<input type="checkbox" name="remember"> Remember Me
				<button class="button">LOGIN</button>
			</form>
		</div>
		<div class="loginTips">
			@if (count($errors) > 0)
				<div class="danger">
					<strong>Whoops!</strong> There were some problems with your input.<br /><br />
					<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
					</ul>
				</div>
				<br />
			@endif
			<p>Don't have an account? <a href="/register">Register here</a>.</p>
			<p>Forgot your password? <a href="{{ url('/password/email') }}">Click here</a>.</p>
		</div>
	</div>
@stop