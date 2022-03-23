<?php
$servername = "localhost";
$username = "id18247922_root";
$password = ")|(E%wUpEDj^an8"; 
$dbname = "id18247922_results"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

  
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully" . "<br>";

$sql = "SELECT * FROM `test` WHERE `Class`='XII'AND `Rollno`='1111'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Rollno: " . $row["Rollno"]. " Name: " . $row["Name"]. " " . " Class: " . $row["Class"] . " Marks: " . $row["Marks"] . "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
