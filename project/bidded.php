<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['current_bid'])) {
        $current = $_POST['current_bid'];

        if(empty($current)){
            echo "insert a bid";
        }else{
            include "dbcon.php";
            $query = "SELECT * FROM product";
            $results =$conn->query($query);
            $row=mysqli_fetch_assoc($results);
            $id= $row['product_id'];
            $stmt="SELECT * FROM product WHERE product_id=$id";

            if($current< $row['min_bid_amount']){
                echo "enter a value greater than the minimum bid ammount";
            }else{
                if($current== $row['min_bid_amount']){
                    echo "Your bid should not be equal to the minimum bid amount";
                }else{
                    
                    echo "Thank you for trusting us in the auctioning process". "<br>";
                    echo "We will notify you of any more bid than yours";
                }
                
            }
        }

    }
}
?>