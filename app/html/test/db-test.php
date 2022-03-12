<?php
$servername = "bots-mysql";
$username = "sudhanshu";
$password = "Wtpmjgda/11";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>