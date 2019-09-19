<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once 'config.php';

$data = array();

$query = "SELECT * FROM tentang";
$result = mysqli_query($conn, $query);
$num_row = mysqli_num_rows($result);
while ($row = mysqli_fetch_object($result)) {
    $data[] = $row;
}

if ($num_row > 0) {
    echo json_encode($data);
}