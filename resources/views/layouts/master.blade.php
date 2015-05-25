<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>techSite</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="css/images/favicon.ico?v=2" type="image/x-icon">
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div class="container">
				<div class="logo floatLeft">
					<a href="" title="Home"><img src="css/images/logo.png" alt="main logo"></a>
				</div>
				<div class="menu floatRight">
					<ul>
						<li><a href="/">HOME</a></li>
						<li><a href="">CATEGORIES</a></li>
						@if (Auth::guest())
							<li><a href="/login">LOGIN</a></li>
							<li><a href="/register">REGISTER</a></li>
						@else
							<li><a href="/profile">{{ strtoupper(Auth::user()->username) }}</a></li>
							<li><a href="/logout">LOGOUT</a></li>
						@endif
					</ul>
				</div>
				<div class="floatRight">
					<div id="hamburger" class="hamburger"><a href="#">&equiv;</a></div>
				</div>
				<div class="clear"></div>
				<div id="menu-small" class="menu-small">
					<ul>
						<li><a href="/">HOME</a></li>
						<li><a href="">CATEGORIES</a></li>
						<li><a href="/login">LOGIN</a></li>
						<li><a href="">REGISTER</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="mainContainer">
			@yield('content')
			@yield('sidebar')
			<div class="clear"></div>
			</div>
			<div id="footer">
				<div class="container">
					<p>&copy; COPYRIGHT <a href="">TECHSITE</a> 2015<br />
					DESIGNED AND DEVELOPED BY <a href="http://miloszdura.com">MILOSZ DURA</a></p>
				</div>
			</div>
		</div>
	</div>
	<script src="js/scripts.js"></script>
</body>
</html>