<?php


	//the form has been submitted with post


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 		If (isset($_POST['Pic'])){
 				$Desc = $_POST['Pic'];
 				echo $Desc;

 		}
 		else 
			{
			  $Desc = "Null";
			  echo "no username supplied";
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
                "INSERT INTO news (NewsPic, Description) "
                . "VALUES ('$News_path', '$Desc')";

                  if ($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registration successful!";

               } 
		}
	}
}
	
		
}
           ?>
