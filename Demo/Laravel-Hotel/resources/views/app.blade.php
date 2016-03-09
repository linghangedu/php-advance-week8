<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

  <link rel="stylesheet" href="{{ URL('bower_components/materialize/dist/css/materialize.css') }}">

  <link href="{{ URL('css/app.css') }}" rel="stylesheet">
  <link href="{{ URL('css/admin.css') }}" rel="stylesheet">
  <script src="bower_components/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-default ">
		<div class="container-fluid">
			<div class="navbar-header">
				         <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">menu</a> -->
				<a class="navbar-brand" href="/">Learn Laravel 5</a>

			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!-- <ul class="nav navbar-nav">
					<li><a href="/admin">Dashboard</a></li>
					<li><a href="/admin/pages">Manage Pages</a></li>
					<li><a href="/admin/articles">Manage Articles</a></li>
					<li><a href="/admin/comments">Manage Comments</a></li>
				</ul> -->

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            					<li><a href="/admin">Dashboard</a></li>

                <li><a href="/admin/pages">Manage Pages</a></li>
					<li><a href="/admin/articles">Manage Articles</a></li>
					<li><a href="/admin/comments">Manage Comments</a></li>
                    <li><a href="/admin/bookings">Manage Bookings</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
	@yield('content')
  </div>
    <!-- /#wrapper -->
	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>