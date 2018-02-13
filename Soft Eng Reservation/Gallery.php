 <?php  

 	require 'dbconnection.php';
    session_start();

   $Gallery="";

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
 		if (isset($_POST['Pic'])){
 				$Desc_value = $_POST["Pic"];
 		}
 		else 
			{
			  $Desc_value = "";
			}
	if (isset($_POST['Upload'])){


	 //path were our News image will be stored
        $News_path = $mysqli->real_escape_string('../Roseum/images/'.$_FILES['News']['name']);

           //make sure the file type is image
        if (preg_match("!image!",$_FILES['News']['type'])) {
            
            //copy image to images/ folder 
            if (copy($_FILES['News']['tmp_name'], $News_path)){
            	 //insert user data into database
                $sql = 
                "INSERT INTO Gallery (Gallery_path, Description) "
                . "VALUES ('$News_path', '$Desc_value')";

                  if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registration successful!";

               } 
		}
	}
}
		

		if(isset($_POST['BtnEvent'])){
			$Gallery = $_POST['BtnEvent'];
		}
		elseif (isset($_POST['BtnTarpaulin'])){
			$Gallery = $_POST['BtnTarpaulin'];
		}
		elseif (isset($_POST['BtnFlower'])){
			$Gallery = $_POST['BtnFlower'];
		}
		else{
			$Gallery = "";
		}

		if(isset($_POST['BtnDelete'])){
			$Del = $_POST['txtDelete'];

			 $sql = 
                "DELETE FROM Gallery where GallaryID = '$Del'";
    

                  if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Delete successful!";
		}
	}
		
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gallery - Roseum Elegance</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	<link rel = "stylesheet" type = "text/css" href = "style.css"/>

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
						<li><a class="active" href="Gallery.php">Gallery</a></li>
						<li><a href="Reservation.php">Reservation</a></li>
						<li><a href="Contact.php">Contact</a></li>
						<li><a href="About.php">About</a></li>
					</ul>
			</div>
			<!--Content Area-->
		    	<div id="banner">
		    		  <div id="Delete">
		    			<form class="form" action="Gallery.php" method="post" enctype="multipart/form-data" autocomplete="off">
		    		   		 <input type="Text" name="txtDelete" size="10" maxlength="25" placeholder="Picture ID"/>
			    			 <input type="submit" value="Delete" name="BtnDelete" class="btn btn-block btn-primary"/>
		    			 </form>
		    			</div>

		    			 <!--UPLOAD BUTTON-->
		    		<div id="Upload">
		    			 <form class="form" action="Gallery.php" method="post" enctype="multipart/form-data" autocomplete="off">
			    			 <input type="submit" value="Event" name="BtnEvent" class="btn btn-block btn-primary"/>
			    			 <input type="submit" value="Tarpaulin" name="BtnTarpaulin" class="btn btn-block btn-primary"/>
			    			 <input type="submit" value="Flower" name="BtnFlower" class="btn btn-block btn-primary"/>
		    			 </form>
		    		</div>

		    		<!--RADIO BUTTON-->
		    		<div id="Radio">
		    			 <form class="form" action="Gallery.php" method="post" enctype="multipart/form-data" autocomplete="off">

		    		 	  <input type="radio" name="Pic"  value="Event" required> 
		    		      <label for="Eve">Event</label>

					      <input type="radio" name="Pic"  value="Tarpaulin">
					      <label for="Tar">Tarpaulin</label>

 						  <input type="radio" name="Pic"  value="Flower"> 
 						  <label for="flo">Flower</label>


		    		 	  <div id="News"><label>Upload News</label><input type="file" name="News" accept="image/*" required /></div>
		    		 	  <input type="submit" value="submit" name="Upload" class="btn btn-block btn-primary"/>
		    		 </form>
		    		 </div>
		    	     	 

		    		   <div id="registered">
						<?php
							 $sql = "SELECT Gallery_path,GallaryID FROM Gallery where Description = 'Tarpaulin'";
    						//$result = mysqli_result object
   							 $result = $mysqli->query( $sql ); 
						    //returns associative array of fetched row
						    while( $row = $result->fetch_assoc() ){ 
						        echo "<div class='userlist'><img class='modal-img' src='".$row['Gallery_path']."'><br>";
						        echo "<span>".$row['GallaryID']."</span></div>";
						    }
						       ?> 


    					<script type="text/javascript" src="modal.js" ></script>


					    </div>

		    	</div>
		    	<!--Footer-->
		    <div id="footer"></div>
		 <!--End Container-->
		
</body>
</html>