<!DOCTYPE html>
<html>

<head>
	<title>My Blog</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">My Blog</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main role="main">
		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">Welcome to My Blog</h1>
				<p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum dolor
					in eleifend auctor.</p>
				<p>
					<a href="#" class="btn btn-primary my-2">Start Reading</a>
					<a href="#" class="btn btn-secondary my-2">Learn More</a>
				</p>
			</div>
		</section>

		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<img src="image1.jpg" alt="Image 1" class="card-img-top">
							<div class="card-body">
								<h4 class="card-title">Post Title 1</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="#" class="btn btn-sm btn-outline-secondary">Read More</a>
									</div>
									<small class="text-muted">Posted by John Doe</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<img src="image2.jpg" alt="Image 2" class="card-img-top">
							<div class="card-body">
								<h4 class="card-title">Post Title 2</h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="#" class="btn btn-sm btn-outline-secondary">Read More</a>
									</div>
									<small class="text-muted">Posted by Jane Smith</small>
								</div>
							</div>
						</div>
					</div>
					<!-- Add more columns for additional posts -->
				</div>

	</main>
</body>

</html>