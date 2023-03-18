
<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'muthenya';

$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Form data
$product_name = $_POST['product-name'];
$product_details = $_POST['product-details'];
$user_id = $_POST['user-id'];
$min_bid_amount = $_POST['min-bid-amount'];
$min_increase_value = $_POST['min-increase-value'];
$closing_date = $_POST['closing-date'];
$last_bid_value = $_POST['last-bid-value'];
$cat_id = $_POST['cat-id'];
$date_created = $_POST['date-created'];
$status = $_POST['status'];
$imageinput = $_POST['file'];

// Insert data into database
$sql = "INSERT INTO products (product_name, product_details, user_id, min_bid_amount, min_increase_value, closing_date, last_bid_value, cat_id, date_created, status, image)
VALUES ('$product_name', '$product_details', '$user_id', '$min_bid_amount', '$min_increase_value', '$closing_date', '$last_bid_value', '$cat_id', '$date_created', '$status', '$imageinput')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
