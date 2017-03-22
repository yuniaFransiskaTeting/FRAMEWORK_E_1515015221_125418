<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>@yield('page_title'|'halaman awal')
		</title>
		<link rel="stylesheet" type="text/css" href="{{asset('component/bootsrap/dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('component/component/font-awesome/css/bootstrap.min.css')}}">
		<style type="text/css">

		body 
		{
			padding-top: 70px;
			padding-bottom: 70px;
			
			}
			.starter-template {
				padding: 40px 15px;
				text-align: center;
			}
			.from-horizontal {
				padding: 15px 10px;
			}

			footer 
			{
				padding-top: 15px;
				text-align: right;
			}
			</style>
</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target = "#naybar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="{{url ('/')}}" class="navbar-brand">Laravel-5</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav"></ul>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mahasiswa <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dlabel">
						<li>
							<a href="{{url('mahasiswa')}}"> Data Mahasiswa</a>
						</li>
						<li class="divider">
							<li><a href=""></a></li>
						</li>
					</li>
				</div>
			</div>
		</nav>
</body>
</html>