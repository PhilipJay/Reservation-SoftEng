 <?php  

    session_start();
 	require 'dbconnection.php';
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

			
	<link rel = "stylesheet" type = "text/css" href = "style.css">

</head>
<body>

		<!--header--> 
			<div id="header">
				<div id="logo"><a href="Index.php"><img src="Images/RoseumIcon.png" alt="logo"></a></div>
				<div id="top_info"><a href="Login.php">Login</a></div>
			</div>

		<!--Container-->
		<div id="Container">
		<!--Navigation Bar-->
			<div id="navbar">
					<ul>
						<li><a href="Index.php">Home</a></li>
						<li><a href="Package.php">Package</a></li>
						<li><a href="Gallery.php">Gallery</a></li>
						<li><a href="Reservation.php">Reservation</a></li>
						<li><a href="Contact.php">Contact</a></li>
						<li><a href="About.php">About</a></li>
					</ul>
			</div>
			<!--Content Area-->
		    	<div id="banner">

		    	 <div class="module">

		    			<form class="form" action="Login.php" method="post" autocomplete="off">
					  
					
		    			<input type = "Text" name="username"  size="20" maxlength="25" id="inputUsername" placeholder="Username" required>

						<input type = "Password" name="password" size="20" maxlength="25" id="inputPassword" placeholder="Password" required>

						<input type="submit" name="btnLogin" value="Login" class="btn btn-block btn-primary"/>

		    			</form>
				</div>

		    	<a href="Register.php" class="pos">Create New Account</a>
		    	</div>
		    	<!--Footer-->
		    <div id="footer">Footer</div>
		</div> <!--End Container-->
		
</body>
</html>