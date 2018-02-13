<?php


//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {
        
        //define other variables with submitted values from $_POST
        $username = $mysqli->real_escape_string($_POST['username']);
        $AdminName = $mysqli->real_escape_string($_POST['name']);

        //md5 hash password for security
        $password = md5($_POST['password']);    

                //set session variables to display on welcome page
                $_SESSION['username'] = $username;
            

                //insert user data into database
                $sql = 
                "INSERT INTO account (username, Name, password)"
                . "VALUES ('$username', '$AdminName', '$password')";
                
                //check if mysql query is successful
                if ($mysqli->query($sql) === true){
                   echo "Registration successful!";
                  
                    //redirect the user to welcome.php
                    header("location: login.php");
                }
           		else {
                   
                }
                	$mysqli->close();          
		    }
		    else {
		       echo "Two passwords do not match!";
		    }
} 
?>