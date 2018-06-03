<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="{{ asset('images/favicon.ico') }}">
	<title>OBM</title>

    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">

				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="{{route('carrera')}}"><em class="fa fa-home"></em> carrera</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-calendar-o"></em> b</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-bar-chart"></em> c</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-hand-o-up"></em> d</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-pencil-square-o"></em> e</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-clone"></em> f</a></li>
				</ul>
			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">TITULO</h1>
					</div>
					@guest
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">
					@else
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

						<img src="images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1">{{Auth::user()->name}}</h4>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em>Perfil</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Ajustes</a>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><em class="fa fa-power-off mr-1"></em>
    					 		Salir
									</a>
									<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    							{{ csrf_field() }}
									</form>
							</div>
							@endguest
								<div class="clear"></div>

				</header>
				@yield('content')
			</main>
		</div>
	</div>
	</body>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('js/chart.min.js') }}"></script>
  <script src="{{ asset('js/chart-data.js') }}"></script>
  <script src="{{ asset('js/easypiechart.js') }}"></script>
  <script src="{{ asset('js/easypiechart-data.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>


</html>
