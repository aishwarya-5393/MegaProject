<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    padding-top: 20px;
}
*{
    padding-top: 20px;
    
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "localhost";
$password = "root";
$dbname = "bookingcalander";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'bookingcalendar');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email, phone, c_name, c_model, c_reg, services, pickup, address, time, note, date FROM autocare";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table><tr><th>Name</th><th>Email</th><th>Phone No</th><th>Company of car</th><th>Car Model</th><th>Car Reg No.</th><th>Services</th><th>Pickup?</th><th>Pickup Address</th><th>Pickup Time</th><th>Note</th><th>Date</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]."</td><td>" . $row["email"]."</td><td>". $row["phone"]."</td><td>" . $row["c_name"]."</td><td>" . $row["c_model"]."</td><td>" . $row["c_reg"]."</td><td>". $row["services"]."</td><td>" . $row["pickup"]."</td><td>" . $row["address"]."</td><td>" . $row["time"]."</td><td>" . $row["note"]."</td><td>".$row["date"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>