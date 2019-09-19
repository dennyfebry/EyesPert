<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once 'config.php';

$data = array();

if ($_POST) {
    $IDPenyakit = $_POST['penyakitID'];
    // $query = "SELECT id_gangguan,nama_gangguan,penanganan,pengertian,gambar FROM penyakit WHERE id_gangguan = '$IDPenyakit'";
    $query = "SELECT penyakit.id_gangguan, penyakit.nama_gangguan, penyakit.penanganan, penyakit.pengertian, penyakit.gambar, penyakit.tips, gejala.nama_gejala FROM pengetahuan INNER JOIN penyakit ON pengetahuan.kode_gangguan = penyakit.kode_gangguan INNER JOIN gejala ON pengetahuan.kode_gejala = gejala.kode_gejala WHERE penyakit.id_gangguan = '$IDPenyakit'";
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