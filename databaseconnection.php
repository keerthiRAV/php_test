<?php
$mysqli = new mysqli("localhost", "root", "", "test");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
  
}
//print_r($mysqli);
echo "Connected to database successfully!"



?>
