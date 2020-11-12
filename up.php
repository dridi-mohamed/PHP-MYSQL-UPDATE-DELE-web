<?php
$servername = "192.168.1.212";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// name colom 
$colom = $_POST['colom'];
// new data inpute
$update_user = $_POST['change'];
// id of user
$id_user = $_POST['id'];
// table name 
$tbname = $_POST['tbupdate'];


$sql = "UPDATE $tbname SET $colom='$update_user' WHERE id=$id_user";

if ($conn->query($sql) === TRUE) {
  echo "the $colom of user have the $id_user in the $tbname is changed ";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>