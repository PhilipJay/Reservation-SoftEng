<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$Username = $mysqli->escape_string($_POST['username']);
$result = $mysqli->query("SELECT * FROM account WHERE Username='$Username'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    echo "User with that email doesn't exist!";
   
}
else { // User exists
    $user = $result->fetch_assoc();

    if ($_POST['password'] = $user['password']) ) {
        
       
        $_SESSION['Name'] = $user['Name'];
       
       
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: index.php");
    }
    else {
        echo "You have entered wrong password, try again!";
       // header("location: error.php");
    }
}

