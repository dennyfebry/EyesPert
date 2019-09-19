<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once 'config.php';

$data = array();

if ($_POST) {
    $penyakit = $_POST['penyakitKey'];
    $query = "SELECT * FROM penyakit WHERE id_gangguan IN ($penyakit)";
    $result = mysqli_query($conn, $query);
    $num_row = mysqli_num_rows($result);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($num_row > 0) {
        echo json_encode($data);
    } else {
        $obj = (object) [
            'error' => 'user not found!'
        ];
        http_response_code(400);
        echo json_encode($obj);
    }
}
