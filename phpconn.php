<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('127.0.0.1:3306','root','','login') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM login_user WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["password"] = $row[password];
$_SESSION["name"] = $row[username];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["name"])) {
header("Location:index.php");
}
?>


<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body background="back.jpg">
  <!-- welcome tag -->
      <div class="jumbotron">
      <center><h1>PROCTOR MANAGEMENT </h1><center>

    </div>
<!-- Form start -->
<form method="post" action="" align='center'>

    <div class="container">

          <div class="form-group">
              <label for="username">Email address:</label>
              <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

    </div>

    <div class="container">
      <a href="register.html">Forgot Password</a>
    </div>
</form>

<!-- Form end-->




</body>
</html>
