<?php
$servername = "localhost";
$username = "pioncham_champo";
$password = "T9j*UhoI.Otq";
$dbname = "pioncham_champo";

$api_key = "rzp_test_dmB1k6a39Yy9fv";
$api_secret = "j3uVZcO6j5Q7p9Jds3lZolia";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>