<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     }
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
  <center><h2>student list</h2></center>
  <div class="container">
 <table class="table table-striped">
 <tr>

  <th>ID</th>
  <th>student Name</th>
  <th>proctor</th>
 </tr>
     <?php
     $host="localhost";
     $dbusername="root";
     $dbpassword= "";
     $dbname="login";
     $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);

      // Check connection
      if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT  STUDENT.sid, student.name,proctor.pname FROM student inner join  proctor  on student.pid=proctor.pid";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
        echo "</td><td>" . $row["sid"] . "</td><td>".$row["name"]."</td><td>"
    . $row["pname"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
</table>
</div>
</body>
</html>
