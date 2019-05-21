<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<?php
$q =strval($_GET['q']);

$host="localhost";
$dbusername="root";
$dbpassword= "";
$dbname="login";
$con=new mysqli ($host,$dbusername,$dbpassword,$dbname);


if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT name,phno,city,email FROM parent  WHERE sid='$q'";
$result =  $con->query($sql);

echo "<table id='customers'>
<tr>
<th>name</th>
<th>phone number</th>
<th>city</th>
<th>Email</th>

</tr>";
  if ($result->num_rows > 0) {
while($row =  $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['phno'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
  } else { echo "0 results"; }
  $con->close();
?>
</body>
</html>
