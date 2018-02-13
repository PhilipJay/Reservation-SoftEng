 <?php  

 	require 'dbconnection.php';
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home - Roseum Elegance</title>

			
	<link rel = "stylesheet" type = "text/css" href = ""/>

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
						<li><a class="active" href="Index.php">Home</a></li>
						<li><a href="Package.php">Package</a></li>
						<li><a href="Gallery.php">Gallery</a></li>
						<li><a href="Reservation.php">Reservation</a></li>
						<li><a href="Contact.php">Contact</a></li>
						<li><a href="About.php">About</a></li>
					</ul>
			</div>
			<!--Content Area-->
		    	<div id="banner">
		    		<h1>What's New</h1>

		    		 <form class="form" action="Index.php" method="post" enctype="multipart/form-data" autocomplete="off">

		    		 	<div id="News"><label>Upload News</label><input type="file" name="News" accept="image/*" required /></div>
		    		 	<input type="submit" value="OK" name="OK" class="btn btn-block btn-primary"/>

		    		 	<div id="registered">
						<?php
							 $sql = "SELECT NewsPic FROM news where Description = 'Main'";
    						//$result = mysqli_result object
   							 $result = $mysqli->query( $sql ); 
						    //returns associative array of fetched row
						    while( $row = $result->fetch_assoc() ){ 
						        echo "<div class='userlist'><img class='modal-img' src='".$row['NewsPic']."'><br></div>";
						    }
						    ?>
						      
		    		 	</div>

		    		 </form>
		    	</div>
		    	<!--Footer-->
		    <div id="footer"></div>
		</div> <!--End Container-->
		
</body>
</html>