<?php
$sid=filter_input(INPUT_POST,'sid');
$type=filter_input(INPUT_POST,'type');
$name=filter_input(INPUT_POST,'name');
$place=filter_input(INPUT_POST,'place');
$sem=filter_input(INPUT_POST,'sem');
$date=filter_input(INPUT_POST,'date');

$host="localhost";
$dbusername="root";
$dbpassword= "";
$dbname="login";
//connect
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){die ('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());}

else{
  $sql="insert into achievements values ('$sid','$type','$name','$place','$sem','$date') ";
      if($conn->query($sql))
        {header("Location:index.php");


        }
        else {
            echo "error:".$sql."<br>".$conn->error;
              }
  $conn->close();

   }


?>
