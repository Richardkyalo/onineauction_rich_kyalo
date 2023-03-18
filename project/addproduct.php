<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body style="background-color: rgb(19, 7, 7);">
  <div class="bg-animation">
  <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div id="stars4"></div>

        <div class="container">

        <form action="addpro.php" method="POST" enctype="multipart/form-data">
		
		<label for="product-name">Product Name:</label><br>
		<input type="text" id="product_name" name="product_name"><br>
		<label for="product_details">Product Details:</label><br>
		<input type="text" id="product_details" name="product_details"><br>
        <label for="imageInput">Insert product image</label> <br>
        <input class="input" type="file"  id="product_image" name="product_image" required autofocus> <br>
		<label for="product_id">Product Id:</label><br>
		<input type="number" id="product_id" name="product_id"><br>
		<label for="user-id">User ID:</label><br>
		<input type="text" id="user_id" name="user_id"><br>
		<label for="min_bid_amount">Minimum Bid Amount:</label><br>
		<input type="text" id="min_bid_amount" name="min_bid_amount"><br>
		<label for="increase_value">Minimum Increase Value:</label><br>
		<input type="text" id="increase_value" name="increase_value"><br>
		<label for="closing_date">Closing Date:</label><br>
		<input type="date" id="closing_date" name="closing_date"><br>
		<label for="last_bid_value">Last Bid Value:</label><br>
		<input type="text" id="last_bid_value" name="last_bid_value"><br>
		<label for="category_id">Category ID:</label><br>
		<input type="text" id="category_id" name="category_id"><br>
		<label for="date_created">Date Created:</label><br>
		<input type="date" id="date_created" name="date_created"><br>
		<label for="product_status">Status:</label><br>
		<input type="text" id="product_status" name="product_status"><br>

		<input type="submit" value="Submit">
	</form>
        </div>
<!--</div>----->
</div>
</div>

    <script src="script.js"></script>
  </body>
</html>