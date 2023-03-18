<?php
// Start the session
session_start();
echo "1";
// Connect to the database
include 'dbcon.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // Get the form data
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    // Query the database for the user with the given username
    $query = "SELECT * FROM auctioneer WHERE Fname='$username'";

    $result = mysqli_query($conn, $query);

    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        // Get the user data
        $user = mysqli_fetch_assoc($result);

        echo $user['pass'];
        // Verify the password
        if ($password== $user['pass']) {
            // Store the user data in the session
            //$_SESSION['user_id'] = $user['id'];
            //$_SESSION['username'] = $user['username'];

            //Redirect to the success page
            header("Location: auctioneerdash.html");
            exit;
} else {
// Password is incorrect
$error_message = "Username or password is incorrect.";
echo $error_message;
}
} else {
// User does not exist
echo "2";
$error_message = "Username or password is incorrect.";
echo $error_message;
}
}

// Close the database connection
mysqli_close($conn);


?>