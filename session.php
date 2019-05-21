<?php
   if (isset($_POST['submit']))
       {
   include("config.php");
   session_start();
   $username=$_POST['username'];
   $password=$_POST['password'];
   $_SESSION['login_user']=$username;
   $query = mysql_query("SELECT username FROM login WHERE username='$username' and password='$password'");
    if (mysql_num_rows($query) != 0)
   {
    echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
     }
     else
     {
   echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
   }
   }
   ?>
