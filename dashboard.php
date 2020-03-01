<?php
 include('login.php');
if(empty($_SESSION['username'])){
	header('location: loginpage.php');
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Dashboard</title>
 </head>
 <body>

	<h2>Header</h2>

	<?php if(isset($_SESSION['success'])): ?>
		<h3>
			<?php echo $_SESSION['success'];
			unset($_SESSION['success']); ?>
		</h3>
	<?php endif ?>
	<?php if(isset($_SESSION['username'])):

	 ?> 
<p>Welcome  <?php echo $_SESSION['username']; ?>  </p>
	 <p><a href="logout.php?logout='1'">Logout</a></p> 
	 <?php endif ?>

 
 </body>
 </html>