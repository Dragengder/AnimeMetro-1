<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
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
					</ul>
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<h2>
					Login Form
					</h2>
					<form action="validationlogin.php" method="post">
						<div class="form-group">
							<label>
								Username
							</label>
							<input type="text" name="username" class="form-control">
							
						</div>
						<div class="form-group">
							<label>
								Email
							</label>
							<input type="Email" name="email" class="form-control">
							
						</div>
						<div class="form-group">
							<label>
								Password
							</label>
							<input type="Password" name="password" class="form-control">
							
						</div>

						<button type="submit" class="btn btn-success"> Login </button>
						
					</form>
					
				</div>
				
			</div>
			
		</div>
	</body>
</html>