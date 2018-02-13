<?php  

//connection variables
$host = 'localhost';
$user = 'root';
$password = '';

//create mysql connection
$mysqli = new mysqli($host,$user,$password);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

?>

<?php
/* form.php */
    session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("localhost", "root", "", "roseum");

     require 'validate.php'; //include validate.php file
    //form HTML code here.....



?>



<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

			
	<link rel = "stylesheet" type = "text/css" href = "style.css">
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>

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
		    		 <h1>Create an account</h1>
		    	 <div class="module">
				   
				    <form class="form" action="Register.php" method="post" autocomplete="off">
				      <input type="text" placeholder="Username" name="username" required />
				      <input type="text" placeholder="Name" name="name" required />
				      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
				      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
				      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
				    </form>
				  </div>

		    	</div>
		    	<!--Footer-->
		    <div id="footer">Footer</div>
		</div> <!--End Container-->
		
</body>
</html>