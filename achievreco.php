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


$sql="SELECT sid,type,name,place,sem,achievements.date FROM achievements  WHERE sid='$q'";
$result =  $con->query($sql);
$c1=0;
$c2=0;
echo "<table id='customers'>
<tr>
<th>sid</th>
<th>type</th>
<th>name</th>
<th>place</th>
<th>sem</th>
<th>date</th>

</tr>";
  if ($result->num_rows > 0) {
while($row =  $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['sid'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    if (($row['type'])=="HACKATHON")
      {$c1=$c1+1;}
      if (($row['type'])=="PAPER-PRESENTATION")
        {$c2=$c2+1;}
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['place'] . "</td>";
    echo "<td>" . $row['sem'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "hackathons:".$c1;
echo "<br><br>";
echo "presentation".$c2;
  } else { echo "0 results"; }
  $con->close();
?>
</body>
</html>
