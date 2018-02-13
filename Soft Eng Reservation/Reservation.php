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

     require 'ReserveScript.php'; //include validate.php file
    //form HTML code here.....



?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

			
	<link rel = "stylesheet" type = "text/css" href = "styless.css">

</head>
	<script type="text/javascript">
		function isNumberKey(evt){
		  	 var charCode = (evt.which) ? evt.which : evt.keyCode;
		    	if (charCode > 31 && (charCode < 48 || charCode > 57))
		      	  return false;
		   		return true;
	}

	</script>
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
						<li><a class="active" href="Reservation.php">Reservation</a></li>
						<li><a href="Contact.php">Contact</a></li>
						<li><a href="About.php">About</a></li>
					</ul>
			</div>
			<!--Content Area-->
		    	<div id="banner">
		    	   <div id="Reserve">
		    		 <form class="form" action="Reservation.php" method="post" autocomplete="off">
					   <fieldset>
						  <legend>Reservation Form:</legend>
						    <label for="Name">Name:</label>
							<input type="text" id="Name" name="txtName" size="16" maxlength="25" placeholder="Surname,Firstname"/>
							<label for="Address">Address</label>
							<input type="text" id="Address" name="txtAddress" size="16" maxlength="10" placeholder="City"/>
							<label for="Contact">Contact Number:</label>
							<input type="text" onkeypress='return isNumberKey(event)' id="Contact" name="txtContact" size="16" maxlength="11" minlength="11" value="09" />
							<label for="Email">Email Address:</label>
							<input type="email" id="Email" name="txtEmail" size="16" maxlength="20" placeholder="Example@address.com"/>
							<label for="Event">Event/Occasion:</label>
							<input type="text" id="Event"  name="txtEvent" size="16" maxlength="15" placeholder="Ex: Birthday"/>
							<label for="Theme">Theme:</label>
							<input type="text" id="Theme"  name="txtTheme" size="16" maxlength="15" placeholder="Ex: Superheroes"/>
							<label for="Celebrant">Name of Celebrant:</label>
							<input type="text" id="Celebrant"  name="txtCelebrant" size="16" maxlength="15" placeholder="Surname,Firstname"/>

							<label for="Pickup">Transaction Date:</label>
							<input type="Date" onchange="return TDate(trans)" id="Pickup"  name="DTran" size="15" maxlength="15" />

							<label for="DateEve">Date of Event:</label>
							<input type="Date" onchange="EDate(even);" id="DateEve"  name="DEvent" size="15" maxlength="15" />

							<input type="submit" name="btnReserve" value="Reserve" class="btn btn-block btn-primary"/>

					   </fieldset>
					</form>

				</div>

		    	</div>
		    	<!--Footer-->
		    <div id="footer">Footer</div>
		</div> <!--End Container-->
		
</body>
</html>