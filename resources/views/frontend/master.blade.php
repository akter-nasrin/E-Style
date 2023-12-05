<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
@notifyCss
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>E-Style t</title>
//<meta name="description" content=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="/assets/css/screen.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>



<body class="home">

    @include('frontend.partials.header')


	
	<header class="main-header " style="background-image: url(assets/img/intro.jpg)">
	<div class="vertical">
		<div class="main-header-content inner">
			<h1 class="page-title">Fashion Critiques</h1>
			<div class="entry-title-divider">
				<span></span><span></span><span></span>
			</div>
			
		</div>
	</div>
	<a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
	</header>


    @yield('content')


	<main id="content" class="content" role="main">
	<div class="wraps">
		<img src="assets/img/shadow.png" class="wrapshadow">
		<div class="grid">
			
			
			
	</div>
	</main>
	

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/assets/js/masonry.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/assets/js/index.js"></script>


@notifyJs

</body>
</html>