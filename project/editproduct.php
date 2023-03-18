<?php

include "dbcon.php";

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // check if delete button is clicked
                if (isset($_POST['delete'])) {
                    $id = $_POST['delete'];
                    $query = "DELETE FROM product WHERE product_id = $id";
                    $results =$conn->query($query);
                   // $stmt->bindParam(":id", $id);
                    //$stmt->execute();
                }
                // check if edit button is clicked
                /*elseif (isset($_POST['edit'])) {
                  //  $id = $_POST['edit'];
                    // redirect to edit page with id parameter
                    header("Location: welcome.html");
                    exit();
                }*/
            }
            
            // prepare the SQL statement
$stmt = "SELECT * FROM product";

// execute the query
//$stmt->execute();

// fetch the result set as an associative array
$results =$conn->query($stmt);

?>