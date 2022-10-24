
<?php

require "database_credential.php";
// Create connection
$conn = new mysqli(servename, username, password, db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>