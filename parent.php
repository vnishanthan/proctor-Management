<?php
$sid=filter_input(INPUT_POST,'sid');
$name=filter_input(INPUT_POST,'name');
$phno=filter_input(INPUT_POST,'phno');
$email=filter_input(INPUT_POST,'email');
$city=filter_input(INPUT_POST,'city');
$host="localhost";
$dbusername="root";
$dbpassword= "";
$dbname="login";
//connect
$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){die ('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());}

else{
  $sql="insert into parent values ('$sid','$name','$phno','$email','$city') ";
      if($conn->query($sql))
        {header("Location:index.php");


        }
        else {
            echo "error:".$sql."<br>".$conn->error;
              }
  $conn->close();

   }


?>
