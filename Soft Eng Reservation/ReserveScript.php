<?php


//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
   
        
        //define other variables with submitted values from $_POST
        
       $Name = $mysqli->real_escape_string($_POST['txtName']);
       $Address = $mysqli->real_escape_string($_POST['txtAddress']);
       $Contact = $mysqli->real_escape_string($_POST['txtContact']);
       $Email = $mysqli->real_escape_string($_POST['txtEmail']);
       $Event = $mysqli->real_escape_string($_POST['txtEvent']);
       $Theme = $mysqli->real_escape_string($_POST['txtTheme']);
       $Celebrant = $mysqli->real_escape_string($_POST['txtCelebrant']);
    

       $Dtran = date('y-m-d', strtotime($_POST['DTran']));
        $Deve = date('y-m-d', strtotime($_POST['DEvent']));
       


                //set session variables to display on welcome page
               

                //insert user data into database
                $sql = 
                "INSERT INTO order (Name, Address, Contact, Email, Event, Theme, Celebrant, TransactionDate, EventDate)"
                . "VALUES ('$Name', '$Address', '$Contact', '$Email', '$Event', '$Theme', '$Celebrant', '$Dtran', '$Deve')";
                
                //check if mysql query is successful
                if ($mysqli->query($sql) === True){
                   echo "Registration successful!";
                  
                    //redirect the user to welcome.php
                    header("location: Reservation.php");
                }
           		else {
                   echo "User could not be added to the database!";

                }
                echo $Dtran ;
                echo $Deve;
                echo $Name;
                echo $Address;
                echo $Contact;
                echo $Email;
                echo $Event;
                echo $Theme;
                echo $Celebrant;
                	$mysqli->close();          
		    
		    
} 
?>