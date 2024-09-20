<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Antrian App | Laravel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- theme meta -->
  <meta name="theme-name" content="dot" />

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('') }}frontend/plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="{{ asset('') }}frontend/plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="icon" href="{{ asset('') }}frontend/images/favicon.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="{{ asset('') }}frontend/assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	<header class="banner overlay bg-cover" data-background="images/banner.jpg">
		<nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">
				<a class="navbar-brand px-2" href="index.html">Antrian App</a>
				<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>				
			</div>
		</nav>
		<!-- banner -->
		<div class="container-fluid section">
			<div class="row mx-auto text-center">
				<div class="col-lg-4">
					<div class="card" style="b  ackground-color: #ffff">
                        <h1 class="text-warning mt-3 mb-3">ANTRIAN</h1>
                    </div>
				</div>
                <div class="col-lg-8" style="background-color: #ffff">
					<h1 class="text-warning mt-3 mb-3">YOUTUBE VIEW</h1>
				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">Loket Tersedia</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="cs()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-user icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{ $antri_cs }}</h3>	
						<p class="mb-0">Customer Service</p>
						@if($antri == "cs")
						<audio controls autoplay hidden>				
							<source src="/audio/{{$antri_cs}}.mp3" type="audio/mpeg">
						</audio>
						@endif
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="teller1()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-user icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{ $antri_teller1 }}</h3>	
						<p class="mb-0">Teller 1</p>
						@if($antri == "tl1")
						<audio controls autoplay hidden>							
							<source src="/audio/{{$antri_teller1}}.mp3" type="audio/mpeg">
						</audio>
						@endif
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="teller2()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-user icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">{{ $antri_teller2 }}</h3>	
						<p class="mb-0">Teller 2</p>
						@if($antri == "tl2")
						<audio controls autoplay hidden>
							<source src="/audio/{{$antri_teller2}}.mp3" type="audio/mpeg">
						</audio>
						@endif
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->	

	<!-- footer -->
	<footer class="section pb-4" style="background-color: #1e3799;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 text-md-left text-center">
					<p class="mb-md-0 mb-4 text-white">Rewrite to App Programming by <a
							class="text-warning"href="">Rivaldiidris777</a></p>
				</div>
				<div class="col-md-4 text-md-right text-center">
					<ul class="list-inline">												
						<li class="list-inline-item text-white"><a class="text-white d-inline-block p-2" href="#"><i class="ti-github"></i></a>
						</li>						
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="{{ asset('') }}frontend/plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('') }}frontend/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="{{ asset('') }}frontend/plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="{{ asset('') }}frontend/assets/script.js"></script>

	<script>
		function cs() {
			var audio = new Audio('/audio/cs.mp3');
			audio.play()
			audio.addEventListener('ended', function() {
				location.href = "/antrian/antri_cs/"+{{$antri_cs}}+"/"+{{$antri_teller1}}+"/"+{{$antri_teller2}}
			});
		}

		function teller1() {
			var audio = new Audio('/audio/teller1.mp3');
			audio.play()
			audio.addEventListener('ended', function() {
				location.href = "/antrian/antri_teller1/"+{{$antri_cs}}+"/"+{{$antri_teller1}}+"/"+{{$antri_teller2}}
			});
		}

		function teller2() {
			var audio = new Audio('/audio/teller2.mp3');
			audio.play()
			audio.addEventListener('ended', function() {
				location.href = "/antrian/antri_teller2/"+{{$antri_cs}}+"/"+{{$antri_teller1}}+"/"+{{$antri_teller2}}
			});
		}
	</script>
</body>

</html>
