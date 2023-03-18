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


  <!--  <div class="container"> -->
      <h1>You can Add a Bidder here</h1>
      
      <form action="addbiddd.php" method="post">
       <!-- <div class="form-group">-->
          <label for="name">First Name:</label> <br>
          <input type="text" class="form-control" id="Fname" name="Fname" required><br>
        <!--</div>
        <div class="form-group">-->
          <label for="name">Last Name:</label><br>
          <input type="text" class="form-control" id="Lname" name="Lname" required><br>
       <!-- </div>
        <div class="form-group">-->
          <label for="name">Login Name:</label><br>
          <input type="text" class="form-control" id="Logname" name="Logname" required><br>
<!--        </div>
        <div class="form-group">
-->       <label for="name">Type of user:</label><br>
          <input type="text" class="form-control" id="user_type" name="user_type" required><br>
<!--        </div>
        <div class="form-group">
-->      <label for="bidder_id">ID:</label><br>
          <input type="number" class="form-control" id="bidder_id" name="bidder_id" required><br>
<!--        </div>
        <div class="form-group">
-->         <label for="email">Email:</label><br>
          <input type="email" class="form-control" id="email" name="email" required><br>
 <!--       </div>
        <div class="form-group">
-->     <label for="password">Password:</label><br>
          <input type="password" class="form-control" id="password" name="password" required><br>
<!---        </div>
        <div class="form-group">
-->         <label for="confirm_password">Confirm Password:</label><br>
          <input type="password" class="form-control" id="confirm_password" name="confirm_password" required><br>
 <!--       </div> 
--> <br>   <div id="error-message"></div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    <!--</div>-->

    </div>
</div>
    <script src="script.js"></script>
  </body>
</html>