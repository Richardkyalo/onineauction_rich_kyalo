<?php

include 'dbcon.php';

  $Fname = $_POST['Fname'];
  $Lname = $_POST['Lname'];
  $user_type = $_POST['user_type'];
  $user_id = $_POST['user_id'];
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

  if (empty($user_type)) {
    $errors[] = 'user type is required';
  }

  if (empty($user_id)) {
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
  $user_ids=mysqli_real_escape_string($conn,$_POST['user_id']);
  $check= mysqli_query($conn, "SELECT * FROM auctioneer WHERE user_id=$user_ids");
  $numrows=mysqli_num_rows($check);
  if($numrows === 0){
// Prepare and bind the statement
$stmt = $conn->prepare("INSERT INTO AUCTIONEER (Fname, Lname, user_type, user_id, email, pass) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $Fname, $Lname, $user_type, $user_id, $email, $password);

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
  echo "user id exists";
}
  // Redirect to success page
  //header('Location: login.php');
  exit;
?>