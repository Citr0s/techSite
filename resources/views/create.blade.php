@extends('layouts.master')

@section('content')
	<div class="container wideBox">
		<h1>Create Article</h1>
		<div class="form">
			<form action="/" method="post">
				<input name="_token" type="hidden" value="{{csrf_token()}}">
				<input type="text" name="title" id="title" placeholder="title"><br />
				<textarea name="body" id="body" cols="50" rows="10" placeholder="body"></textarea><br />
				<label for="published_at">Publish on:</label>
				<input type="date" name="published_at" id="published_at" value="{{ date('Y-m-d') }}"><br />
				<button class="button">SUBMIT</button>
			</form>
		</div>
		<div class="loginTips">
			@if ($errors->any())
				<div class="danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</div>
	</div>
@stop