@extends('layouts.master')

@section('content')
	<div class="leftContainer">

		@foreach($articles as $article)

		<div class="article">
			<div class="thumbnail">
				<a href="{{ url('/', [$article->id]) }}"><img src="css/uploads/{{ $article->thumbnail }}" alt="{{ $article->title }}"></a>
			</div>
			<div class="title"><a href="{{ url('/', [$article->id]) }}">{{ $article->title }}</a></div>
			<div class="info">
				<table>
					<tr>
						<td><img src="css/images/articleInfoClock.png" alt="clock"></td><td> {{ date("l, d" ,strtotime($article->published_at)) }}<span class="dayE">{{ date("S" ,strtotime($article->published_at)) }}</span> {{ date("M Y" ,strtotime($article->published_at)) }}</td><td>/</td>
						<td><img src="css/images/articleInfoAuthor.png" alt="author"></td><td>Milosz Dura</td><td>/</td>
						<td><img src="css/images/articleInfoComments.png" alt="comments"></td><td>3 Comments</td>
					</tr>
				</table>
			</div>
			<div class="intro">{{ $article->body }}</div>
			<a href="{{ url('/', [$article->id]) }}"><div class="readmore">CLICK TO READ MORE</div></a>
			<div class="share">
				<div class="head">Share</div>
				<div class="icons">
					<img src="css/images/articleShareFacebook.png" alt="facebook">
					<img src="css/images/articleShareTwitter.png" alt="twitter">
					<img src="css/images/articleShareGoogle.png" alt="google">

				</div>
			</div>
		</div>
		
		@endforeach

	</div>
@stop

@section('sidebar')
	<div class="rightContainer">
		<div class="article">
			<form action="" method="post">
				<input type="text" placeholder="Search...">
			</form>
		</div>
		<div class="article">
			<div class="coverPicture" style="background-image:url(css/uploads/users/1cover.png);">
				<div class="userPicture"><img src="css/uploads/users/1user.jpg" alt=""></div>
			</div>
			<div class="userInfo">
				<div class="userName">Milosz Dura</div>
				<div class="userBio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis dicta dolorum, cupiditate esse non ad repudiandae itaque quas quod tempora, sunt, maxime adipisci magni optio aspernatur, perspiciatis minima dignissimos voluptatibus.</div>
			</div>
		</div>
		<div class="article">
			<div class="articleName">
				Popular Posts
			</div>
			<table>
				<tr>
					<td><div class="thumbnail" style="background-image:url(css/uploads/pic1.jpg);"></div></td>
					<td><div class="title">Lorem ipsum</div></td>
				</tr>
			</table>
			<table>
				<tr>
					<td><div class="thumbnail" style="background-image:url(css/uploads/pic2.jpg);"></div></td>
					<td><div class="title">Lorem ipsum</div></td>
				</tr>
			</table>
		</div>
		<div class="article">
			<div class="articleName">
				Facebook
			</div>
			<p>facebook</p>
		</div>
		<div class="article">
			<div class="articleName">
				Popular Tags
			</div>
			<p>tags</p>
		</div>
	</div>
	@stop