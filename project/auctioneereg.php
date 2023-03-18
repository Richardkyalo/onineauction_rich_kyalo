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


    <!--<div class="container">-->
      <h1>HEY!!!! WELCOME</h1>
      <H2>REGISTER HERE</H2>
      <!---<div class="container"> -->
      <form action="Aureg.php" method="post">
        <!--<div class="form-group">-->
          <label for="name">First Name:</label> <br>
          <input type="text" class="form-control" id="Fname" name="Fname"  required><br>
        <!--</div>-->
        <!--<div class="form-group">-->
          <label for="name">Last Name:</label><br>
          <input type="text"  id="Lname" name="Lname" required><br>
       <!-- </div>-->
        <!--<div class="form-group">-->
          <label for="name">Type of user:</label><br>
          <input type="text"  id="user_type" name="user_type" required><br>
        <!--</div>-->
        <!--<div class="form-group">---->
          <label for="name">ID:</label><br>
          <input type="text"  id="user_id" name="user_id" required><br>
        <!--</div>-->
        <!--<div class="form-group">-->
          <label for="email">Email:</label><br>
          <input type="email"  id="email" name="email" required><br>
        <!--</div>
        <div class="form-group">-->
          <label for="password">Password:</label><br>
          <input type="password"  id="password" name="password" required><br>
        <!--</div>
        <div class="form-group">-->
          <label for="confirm_password">Confirm Password:</label><br>
          <input type="password"  id="confirm_password" name="confirm_password" required><br>
        <!--</div>-->
        <br>
        <div id="error-message"></div>
        <button type="submit" class="btn btn-primary">Sign up</button>
      </form>
    </div>
<!--</div>----->
</div>
</div>

    <script src="script.js"></script>
  </body>
</html>