<?php

$server = "localhost";
$usernames = "root";
$password = "";
$database = "users";

$conn=mysqli_connect($server,$usernames,$password,$database);
if (!$conn) {
  die("Couldn't connect to database: " .mysqli_connect_error());
}
else {
    echo "Database connected: " ;
}



?>