<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once 'config.php';

$data = array();
if ($_POST) {
    $kodeGejala =  $_POST['kodeGejalaKey'];
    $inputGejala =  $_POST['inputGejalaKey'];
    $query = "SELECT penyakit.kode_gangguan, penyakit.nama_gangguan, gejala.kode_gejala, gejala.belief FROM pengetahuan LEFT JOIN penyakit ON penyakit.kode_gangguan = pengetahuan.kode_gangguan LEFT JOIN gejala ON gejala.kode_gejala = pengetahuan.kode_gejala WHERE gejala.kode_gejala IN ($kodeGejala) AND gejala.id_gejala IN ($inputGejala)";
    $result = mysqli_query($conn, $query);
    $num_row = mysqli_num_rows($result);
    while ($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }

    if ($num_row > 0) {
        echo json_encode($data);
    }
}
