<?php 

session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="images/anime.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="animelist.php">Anime List</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="faq.php">Anime News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="faq.php">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Log in</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="signup.php">Sign up</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Log out</a>
							</div>
						</li>
					</ul>
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
		<div id="demo" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			
			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/home.jpg" alt="Los Angeles" width="1100" height="400">
				</div>
				<div class="carousel-item">
					<img src="images/home2.png" alt="Chicago" width="1100" height="400">
				</div>
				<div class="carousel-item">
					<img src="images/home3.jpg" alt="New York" width="1100" height="400">
				</div>
			</div>
			
			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<section class="my-5">
			<div class="py-5">
				<div>
					<h2 class="text-center">Anime List</h2>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
								<img class="card-img-top" src="images/aot.jpg" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">Attack on Titan</h4>
									<p class="card-text">Centuries ago, mankind was slaughtered to near extinction by monstrous humanoid creatures called titans, forcing humans to hide in fear behind enormous concentric walls. What makes these giants truly terrifying is that their taste for human flesh is not born out of hunger but what appears to be out of pleasure. To ensure their survival, the remnants of humanity....</p>
									<a href="#" class="btn btn-primary">Read more..</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
								<img class="card-img-top" src="images/hunter.jpg" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">Hunter X Hunter</h4>
									<p class="card-text">Hunters are specialized in a wide variety of fields, ranging from treasure hunting to cooking. They have access to otherwise unavailable funds and information that allow them to pursue their dreams and interests. However, being a hunter is a special privilege, only attained by taking a deadly exam with an extremely...</p>
									<a href="#" class="btn btn-primary">Read more..</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
								<img class="card-img-top" src="images/fma.jpg" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">Full Metal Alchamist</h4>
									<p class="card-text">Alchemists are knowledgeable and naturally talented individuals who can manipulate and modify matter due to their art. Yet despite the wide range of possibilities, alchemy is not as all-powerful as most would believe. Human transmutation is strictly...</p>
									<a href="#" class="btn btn-primary">Read more..</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="my-5">
		<div class="py-5">
			<div>
				<h2 class="text-center">Anime News</h2>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">08 May</div>
                                <a href="#">
                                    <img src="images/onepiece.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">Latest on piece</a></h5>
                                <p>Oda refused to comment about Zoro's eyes and Luffy's will.</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
						<div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">08 May</div>
                                <a href="#">
                                    <img src="images/slime3.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">Latest on TTIGRAAS</a></h5>
                                <p>Rimuru Tempest became a demon lord</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
						<div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">08 May</div>
                                <a href="#">
                                    <img src="images/tokyo.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">Latest Tokyo ghoul</a></h5>
                                <p>New seson to be released soon</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>