<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS Script Offline -->
	<!-- <link rel="stylesheet" type="text/css" href="bootstrapv2/css/bootstrap.min.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 | @yield('title')</title>
</head>
<body>
    <!-- Navbar -->
	<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
		<!-- Judul Utama -->
		<a class="navbar-brand text-warning" href="/"><b>Home</b></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Menu - Menu -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<!-- About -->
				<li class="nav-item">
					<a class="nav-link text-light" href="/students">Students</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="/class">Kelas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="/extrakulikuler">Extrakulikuler</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="/teachers">Teacher</a>
				</li>
				
			</ul>
		</div>
        </div>
	</nav>

    <div class="container">
    @yield('content')
    </div>

    <!-- Script JS Offline -->
    <!-- <script type="text/javascript" src="bootstrapv2/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrapv2/js/bootstrap.bundle.min.js"></script> -->

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>