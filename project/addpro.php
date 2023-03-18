<?php
// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	// Include database connection file
	include "dbcon.php";

	// Prepare insert query
	
	// Get form data
	$product_name = $_POST["product_name"];
	$product_details = $_POST["product_details"];
	$product_image_name = $_FILES["product_image"]["name"];
	$product_id=$_POST["product_id"];
	//$product_image_tmp_name = $_FILES["product_image"]["tmp_name"];
	$user_id = $_POST["user_id"];
    $min_bid_amount=$_POST["min_bid_amount"];
    $increase_value=$_POST["increase_value"];
    $closing_date=$_POST["closing_date"];
    $last_bid_value=$_POST["last_bid_value"];
    $category_id=$_POST["category_id"];
    $date_created= $_POST["date_created"];
    $product_status=$_POST["product_status"];

	// Upload image to server
	$imageFile = $_FILES["product_image"];
	if(!isset($imageFile)){
		die("upoad image");
	}
	$image_extension=".jpg";
	$image_name=bin2hex(random_bytes(16)).$image_extension;
	move_uploaded_file($imageFile["tmp_name"],__DIR__ ."/product_image/".$image_name);
	$product_image_upload_dir = "product_images/";
	$product_image_upload_path = $product_image_upload_dir . basename($product_image_name);
	//move_uploaded_file($_FILES[$product_image_name][$product_image_tmp_name],$product_image_upload_path);


	$product_ids=mysqli_real_escape_string($conn,$_POST['product_id']);
  $check= mysqli_query($conn, "SELECT * FROM product WHERE product_id=$product_ids");
  $numrows=mysqli_num_rows($check);
  if($numrows === 0){
	$insert_query = $conn->prepare("INSERT INTO product (product_name, product_details, product_image, product_id, user_id, min_bid_amount, increase_value, closing_date, last_bid_value, category_id, date_created, product_status) values (?,?,?,?,?,?,?,?,?,?,?,?)") ;
	$insert_query->bind_param("ssssssssssss" ,$product_name, $product_details, $image_name, $product_id, $user_id, $min_bid_amount, $increase_value, $closing_date, $last_bid_value, $category_id, $date_created, $product_status);

	$insert_query->execute();

	header("Location: admin.php");
	//$_SESSION["image"]=$row["product_image"];

  }else{
		echo "product id exists";
	  }
	  
}
?>