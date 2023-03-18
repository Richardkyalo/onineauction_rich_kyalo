<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body style="background-color: rgb(19, 7, 7);">    

  <div class="bg-animation">
  <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div id="stars4"></div>
        <div class="container">
    <form action="verifybidder.php" method="post">
    <h1>Login</h1>
    <p>Use your Login name as username.</p>
      <label for="username">Name:</label><br>
      <input type="text" id="username" name="username">
      <br><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password">
      <br><br>
      <input type="submit" value="Submit"><br>
      <p><a href="bidderreg.php">click here</a> To create account if you dont't have any!!</p>
    </form>
    </div>
</div>
  </body>
</html>