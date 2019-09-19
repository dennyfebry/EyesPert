<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once 'config.php';

$data = array();
if ($_POST) {
    $densitas1Key =  $_POST['densitas1Key'];
    $query = "SELECT penyakit.kode_gangguan, penyakit.nama_gangguan FROM pengetahuan LEFT JOIN penyakit ON penyakit.kode_gangguan = pengetahuan.kode_gangguan LEFT JOIN gejala ON gejala.kode_gejala = pengetahuan.kode_gejala WHERE gejala.kode_gejala = '$densitas1Key' ";
    $result = mysqli_query($conn, $query);
    $num_row = mysqli_num_rows($result);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($num_row > 0) {
        echo json_encode($data);
    }
}
