<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cservedb";
$conn = mysqli_connect($servername, $username, $password, $dbname) or 
die("Connection failed: " . mysqli_connect_error());
?>