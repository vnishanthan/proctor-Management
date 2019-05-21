<?php
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
 if(!empty($username)){
   if(!empty($password))
    {
      $host="localhost";
      $dbusername="root";
      $dbpassword= "";
      $dbname="login";
      //connect
      $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

      if(mysqli_connect_error()){die ('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());}

      else{
        $sql="insert into account(username,password) values ('$username','$password') ";
            if($conn->query($sql))
              {//echo "success!!";
                header('Location: student.html');
                exit;
              }
              else {
                  echo "error:".$sql."<br>".$conn->error;
                    }
        $conn->close();

         }

    }

    else{echo "pass empty";
    die();}
 }

 else {echo "username empty";
die();}




 ?>
