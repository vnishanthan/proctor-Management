<?php
$sid=filter_input(INPUT_POST,'sid');
$cid=filter_input(INPUT_POST,'cid');
$grade=filter_input(INPUT_POST,'grade');

$host="localhost";
$dbusername="root";
$dbpassword= "";
$dbname="login";
//connect
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){die ('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());}

else{
  $sql="insert into academics values ('$sid','$cid','$grade') ";
      if($conn->query($sql))
        {header("Location:index.php");


        }
        else {
            echo "error:".$sql."<br>".$conn->error;
              }
  $conn->close();

   }


?>
