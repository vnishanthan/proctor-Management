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
$tot=0;

$sql="SELECT academics.cid,academics.grade,courses.credit,courses.category FROM academics inner join courses WHERE academics.cid=courses.cid and academics.sid='$q'";
$result =  $con->query($sql);

echo "<table id='customers'>
<tr>
<th>cid</th>
<th>grade</th>
<th>credit</th>
<th>category</th>
</tr>";
  if ($result->num_rows > 0) {
while($row =  $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['cid'] . "</td>";

    echo "<td>" . $row['grade'] . "</td>";
    echo "<td>" . $row['credit'] . "</td>";
    $tot=$tot +intval($row['credit']);
    echo "<td>" . $row['category'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo"<b>";
echo "Total-credits=".$tot;
echo "</b>";
  } else { echo "0 results"; }
  $con->close();
?>
</body>
</html>
