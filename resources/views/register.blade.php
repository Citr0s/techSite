@extends('layouts.master')

@section('content')
	<div class="container wideBox">
		<h1>Register</h1>
		<form method="POST" action="{{ url('/auth/register') }}">
		<div class="form">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<table>
				<tr>
					<td><label class="col-md-4 control-label">Name</label></td>
					<td><input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="username"></td>
				</tr>
				<tr>
					<td><label class="col-md-4 control-label">E-Mail Address</label></td>
					<td><input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="email"></td>
				</tr>
				<tr>
					<td><label class="col-md-4 control-label">Password</label></td>
					<td><input type="password" name="password" id="password" placeholder="password"></td>
				</tr>
				<tr>
					<td><label class="col-md-4 control-label">Confirm Password</label></td>
					<td>
				<input type="password" name="password_confirmation" placeholder="confirm password"></td>
				</tr>
				<tr>
					<td></td><td><button class="button">REGISTER</button></td>
				</tr>
			</table>
			</form>			
		</div>
		<div class="loginTips">
			@if (count($errors) > 0)
				<div class="danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						<li>{{ $errors }}</li>
					</ul>
				</div>
				<br />
			@endif
			<p>Already have an account? <a href="/login">Login here</a>.</p>
		</div>
	</div>
@stop