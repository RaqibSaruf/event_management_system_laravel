<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	<title>Registration Form</title>
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
		    	<a class="nav-link" href="index.php">Home</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="about.php">About</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="contact.php">Contact</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link active" href="registration.php">Registration</a>
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


<!-- registration form -->
	<div class="container mt-3 mb-3">
		<div class="row d-flex justify-content-lg-center">
			<div class="col-lg-8">	
				<div class="flex-wrap-reverse">
					<div class="card p-3 border">

						<div class="card-header bg-dark text-light">
							<h2 class="d-flex justify-content-sm-center">Registration Form</h2>
						</div>
						<div class="card-header bg-secondary text-light">
							<h5 class="d-flex justify-content-sm-center">Event Name</h5>
						</div>
						<div class="card-header bg-light text-body">
							<h6 class="d-flex justify-content-sm-center">Serial No:</h6>
						</div>

						<div class="card-content mt-3">
							<form action="#" method="post">
								<div class="form-group">
								    <label>Full Name:</label>
								    <input type="text" class="form-control" placeholder="Enter your name" name="name" autofocus>					
								</div>
								<div class="form-group">
								    <label>Student ID:</label>
								    <input type="text" class="form-control" placeholder="Enter your student ID" name="s_id" autofocus>					
								</div>
								<div class="form-group">
								    <label>Department Name:</label>
								    <select name="dept" class="custom-select">
								      <option selected>Select Department</option>
								      <option value="CSE">CSE</option>
								      <option value="EEE">EEE</option>
								      <option value="ECE">ECE</option>
								      <option value="BBA">BBA</option>
								      <option value="ECO">ECO</option>
								      <option value="MPS">MPS</option>
								    </select>					
								</div>
								<div class="form-group">
								    <label>Email:</label>
								    <input type="email" class="form-control" placeholder="Enter email" name="email">
							    </div>
							    <div class="form-group">
								    <label>Contact Number:</label>
								    <input type="tel" class="form-control" maxlength="11" placeholder="Enter contact number" name="contact">
							    </div>
							</form>
						</div>

						<div class="card-footer">
							<button type="submit" name="req-btn" class="btn btn-success btn-block btn-lg">Submit</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<br><br>
	



</body>
</html>