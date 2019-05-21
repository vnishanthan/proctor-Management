<?php
$sid=filter_input(INPUT_POST,'sid');
$name=filter_input(INPUT_POST,'name');
$depid=filter_input(INPUT_POST,'depid');
$rollno=filter_input(INPUT_POST,'rollno');

 if(!empty($sid)){
   if(!empty($rollno))
    {
      $host="localhost";
      $dbusername="root";
      $dbpassword= "";
      $dbname="login";
      //connect
      $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

      if(mysqli_connect_error()){die ('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());}

      else{
        $sql="insert into student values ('$sid','$name','$depid','$rollno') ";
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
