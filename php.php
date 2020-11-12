<?php
$servername = "192.168.1.212";
$username = "root";
$password = "root";
$dbname = "test";

// id add by user
$deletuser = $_POST['id'];
// tablename add by user 
$intab = $_POST['tabx'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM $intab WHERE id=$deletuser";

if ($conn->query($sql) === TRUE) {
  echo "user have id $deletuser in the table called $intab deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>