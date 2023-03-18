<?php
include 'dbcon.php';

  $Fname = $_POST['Fname'];
  $Lname = $_POST['Lname'];
  $Logname = $_POST['Logname'];
  $user_type = $_POST['user_type'];
  $bidder_id = $_POST['bidder_id'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirm_password'];

  

  $errors = array();

  // Validate name
  if (empty($Fname)) {
    $errors[] = 'First Name is required';
  }

  if (empty($Lname)) {
    $errors[] = 'Last Name is required';
  }

  if (empty($Logname)) {
    $errors[] = 'Last Name is required';
  }


  if (empty($user_type)) {
    $errors[] = 'user type is required';
  }

  if (empty($bidder_id)) {
    $errors[] = 'ID is required';
  }

  // Validate email
  if (empty($email)) {
    $errors[] = 'Email is required';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email address';
  }

  // Validate password
  if (empty($password)) {
    $errors[] = 'Password is required';
  } elseif (strlen($password) < 8) {
    $errors[] = 'Password must be at least 8 characters long';
  }

  // Validate confirm password
  if (empty($confirmPassword)) {
    $errors[] = 'Confirm password is required';
  } elseif ($password != $confirmPassword) {
    $errors[] = 'Passwords do not match';
  }

  // If there are errors, show them and stop processing
  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo $error . '<br>';
    }
    exit;
  }

  // Save data to database
 
// Prepare and bind the statement
$bidder_ids=mysqli_real_escape_string($conn,$_POST['bidder_id']);
$check= mysqli_query($conn, "SELECT * FROM bidder WHERE bidder_id=$bidder_ids");
$numrows=mysqli_num_rows($check);
if($numrows === 0){
$stmt = $conn->prepare("INSERT INTO bidder (Fname, Lname, Logname, user_type, bidder_id, email, pass) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $Fname, $Lname, $Logname, $user_type, $bidder_id, $email, $password);

// Execute the statement
$stmt->execute();

if ($stmt->affected_rows > 0) {
  header('Location: admin.php');
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and the connection
$stmt->close();
$conn->close();
} else{
  echo "bidder id exists";
}
  // Redirect to success page
  //header('Location: login.php');
  exit;
?>