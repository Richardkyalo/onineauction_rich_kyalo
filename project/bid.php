<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
</head>
<body>
    <?php
    include "dbcon.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['bid'])) {
            $id = $_POST['bid'];

            $query = "SELECT * FROM product WHERE product_id = $id";
            $results =$conn->query($query);
            $row=mysqli_fetch_assoc($results);            
    }
   ///// $stmt = "SELECT * FROM product";
    
}
    ?>
    <table style=" width:85%">
        <td>
    <img src="./product_image/<?php echo $row['product_image']; ?>" width="750" height="450">
</td>
<td>
    
<?php
    echo "<br>";
             echo "<b>Product Name: </b>"; 
             echo $row['product_name'] . "<br>". "<br>";
             echo "<b>Product Details:</b>";
             echo $row['product_details'] . "<br>". "<br>";
             echo "<b>User Id:</b>";
             echo $row['user_id'] . "<br>". "<br>";
             echo "<b>Minimum Bid Amount:</b>";
             echo $row['min_bid_amount'] . "<br>". "<br>";
             echo "<b>Increase Value:</b>";
             echo $row['increase_value'] . "<br>". "<br>";
             echo "<b>Product Status:</b>";
             echo $row['product_status'] . "<br>". "<br>";?>

</td>
<td><form action="bidded.php" method="post">
    <label for=""> <b>Your bid ammount</b> </label><br> <br>
    <input type="number" id="current_bid" name="current_bid"><br><br>
    <button>Submit</button>
</form>

</td>
    </table>           
</body>
</html>