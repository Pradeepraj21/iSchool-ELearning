<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "lms_db";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
} 
// else {
//  echo"connected";
// }
?>