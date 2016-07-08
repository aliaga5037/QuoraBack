<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- styles -->
		<link href="/css/styles.css" rel="stylesheet">
		<script src='/js/jquery-2.2.4.js'></script>
		<script src="/bootstrap/js/bootstrap.min.js"></script>
		<script src="/js/main.js"></script>
		@yield('head')
	</head>
	<body>
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-5">
						<!-- Logo -->
						<div class="logo">
							<h1><a href="/">Quora</a></h1>
						</div>
					</div>
					<div class="col-xs-2 pull-right	">
						<ul class="nav navbar-nav navbar-right">
							@if (Auth::guest())
							<li><a href="{{ url('/login') }}">Login</a></li>
							<li><a href="{{ url('/register') }}">Register</a></li>
							@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative;padding-left: 50px;">
									<img src="/uploads/avatar/{{ Auth::user()->avatar }}" style="width: 32px;height: 32px;position: absolute;top:10px;left:10px;border-radius:50%;">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
									<li><a href="{{ url('/profile') }}"><i class="fa fa-btn "></i>Profil</a></li>
									@if(Auth::user()->role == 'admin' || Auth::user()->role == 'muellim'  || Auth::user()->role == 'mentor')
									<li><a href="{{ url('/adminPage') }}"><i class="fa fa-btn "></i>Admin page</a></li>
									@endif
								</ul>
							</li>
							@endif
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="blur"></div>
		<div class="page-content">
			<div class="row">
				<div class="col-md-2">
					<div class="sidebar content-box" style="display: block;">
						<ul class="nav">
							<!-- Main menu -->
							<li class="current"><a href="/adminPage"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
							<li><a href="/admin/tables"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
							<li><a href="/admin/cats"><i class="glyphicon glyphicon-list"></i> Categories</a></li>
						</ul>
					</div>
				</div>
				@yield('content')
			</div>
		</div>
		@yield('footer')
	</body>
</html>