@extends('layouts.master')

@section('content')
	<div class="container wideBox">
		<h1>Login</h1>
		<div class="form">
			<form action="#">
				<input type="email" name="email" id="email" placeholder="email">
				<input type="password" name="password" id="password" placeholder="password">
				<button class="button">LOGIN</button>
			</form>
		</div>
		<div class="loginTips">
			<p>Don't have an account? <a href="">Register here</a>.</p>
			<p>Forgot your password? <a href="">Click here</a>.</p>
		</div>
	</div>
@stop