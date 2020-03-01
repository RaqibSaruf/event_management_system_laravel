<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	<title>Home</title>

</head>
<body>



<!--header Section-->

<nav class="navbar navbar-expand-lg bg-info">
 	<a class="navbar-brand" href="index.php">
		<b>East West University</b>
		<h6>Computer Programming Club</h6>
	</a>
	<button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-lg-end mt-lg-3" id="collapsibleNavbar">
	  	<ul class="navbar-nav nav-tabs mt-lg-3">
	    	<li class="nav-item">
		    	<a class="nav-link active" href="index.php">Home</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="about.php">About</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="contact.php">Contact</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="registration.php">Registration</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="reqruitment.php">Reqruitment</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="dashboard.php">Dashboard</a>
		  	</li>		  	  
	  	</ul>
	</div>  
</nav>


<!-- body Section -->

<div class="bodySection">



<!-- slider Section -->
		<div class="Slider">
			<div class="container-fluid">
				<div id="changeimg" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-lg-block w-100 img-fluid" src="photos/P1150470.JPG" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-lg-block w-100 img-fluid" src="photos/P1150472.JPG" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-lg-block w-100 img-fluid" src="photos/P1150474.JPG" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#changeimg" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#changeimg" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>



<!-- marquee section -->
	<div class="mt-lg-3">
		<div class="container">
			<marquee class="bg-info" scrollamount="15" behavior="alternate">
				<p style="font-family: Impact; font-size: 20pt;">
					<span style="padding-left: 20px;">Notice!</span>
				</p>
			</marquee>
		</div>
	</div>

<!-- Content Section-->

	<div class="ContentSection mt-lg-3">
		<div class="container-fluid">
			<div class="row">


<!--  Latest -->
				<div class="col-lg-8">

					<div class="flex-wrap-reverse">
						<div class="card">

							<div class="card-header bg-info">
								<h5 class="d-flex justify-content-sm-start">Latest</h5>
							</div>

							<div class="card-body">

								<div class="p-2 border mt-1">
									<h6 class="card-title">Title</h6>
								</div>
								<div class="p-2 border mt-1">
									<h6 class="card-title">Title</h6>
								</div>
								<div class="p-2 border mt-1">
									<h6 class="card-title">Title</h6>
								</div>

							</div>

							<div class="card-footer">
								<a href="#" class="card-link d-flex justify-content-sm-center">See More</a>
							</div>

						</div>
					 </div>

				</div>


<!--  Upcoming -->
				<div class="col-lg-4">

					<div class="flex-wrap-reverse">
						<div class="card">

							<div class="card-header bg-info">
								<h5 class="d-flex justify-content-sm-center">Upcoming</h5>
							</div>

							<div class="card-body">

								<ul type="round" class="pl-3">
									<li><a class="card-link" href="#">ascafasfdgfhfhf</a></li>
									<li><a class="card-link" href="#">ascafasfdgfhfhf</a></li>
									<li><a class="card-link" href="#">ascafasfdgfhfhf</a></li>
									<li><a class="card-link" href="#">ascafasfdgfhfhf</a></li>
									<li><a class="card-link" href="#">ascafasfdgfhfhf</a></li>
									<li><a class="card-link" href="#">ascafasfdgfhfhf</a></li>
								</ul>

							</div>

							<div class="card-footer">
								<a href="#" class="card-link d-flex justify-content-sm-center">Show All</a>
							</div>

						</div>
					 </div>

				</div>


			</div>
		</div>
	</div>

<br>













</div>


</body>
</html>