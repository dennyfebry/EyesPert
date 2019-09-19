<?php
$servername = "localhost";
$username = "dene4871_denny";
$password = "inwardco24";
$database = "dene4871_eyespert";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "eyespert";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  $obj = (object) [
    'error' => 'failed to connect to db'
  ];
  http_response_code(400);
  header('Content-Type: application/json');
  echo json_encode($obj);
}

// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// } else {
//   echo "Connected successfully\n\n";
// }
