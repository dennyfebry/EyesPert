<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once 'config.php';

$data = array();
if ($_POST) {
    $inputGejala =  $_POST['inputGejalaKey'];
    $query = "SELECT GROUP_CONCAT(penyakit.kode_gangguan),  gejala.belief FROM pengetahuan LEFT JOIN penyakit ON penyakit.kode_gangguan = pengetahuan.kode_gangguan LEFT JOIN gejala ON gejala.kode_gejala = pengetahuan.kode_gejala WHERE gejala.id_gejala IN (" . implode(',',  $inputGejala) . ")  GROUP BY gejala.id_gejala";
    $result = $conn->query($query);
    $evidence = array();
    while ($row = $result->fetch_row()) {
        $evidence[] = $row;
    }
    $banyakgejala = mysqli_num_rows($result);
    // var_dump($evidence);

    $query = "SELECT GROUP_CONCAT(kode_gangguan) FROM penyakit";
    $result = $conn->query($query);
    $row = $result->fetch_row();
    $fod = $row[0];
    // var_dump($fod);
    // die();

    $data = array();

    // Menampilkan Gejala yang dipilih
    $data[] = array("<center><strong>== GEJALA YANG DIPILIH ==</strong></center>\n");
    $data[] = array("Jumlah gejala yang dipilih = " . $banyakgejala);
    $query = "SELECT nama_gejala, belief FROM gejala WHERE id_gejala IN (" . implode(',',  $inputGejala) . ") ";
    $result = $conn->query($query);
    $gejala = array();
    while ($row = $result->fetch_row()) {
        $gejala[] = $row;
    }
    // var_dump($gejala);
    // die();
    $n = 1;
    for ($i = 0; $i < $banyakgejala; $i++) {
        if($banyakgejala > 1) {
            $data[] = array("</br><center>== GEJALA KE-" . $n . "==</center>");
        }
        $data[] = array("Nama gejala : " . $gejala[$i][0] . "</br>");
        $data[] = array("Belief : " . $gejala[$i][1] . "</br>");
        $data[] = array("&theta; : 1-" . $gejala[$i][1] . "= " . (1 - $gejala[$i][1]) . "</br>");
        $n++;
    }

    if ($banyakgejala == 1) {
        // $query = "SELECT penyakit.kode_gangguan, penyakit.nama_gangguan FROM pengetahuan LEFT JOIN penyakit ON penyakit.kode_gangguan = pengetahuan.kode_gangguan LEFT JOIN gejala ON gejala.kode_gejala = pengetahuan.kode_gejala WHERE gejala.kode_gejala = 'G01'";

        //--- menampilkan hasil akhir 
        $data[] = array("<center><strong>== HASIL  ==</strong></center>\n");
        $final = explode(',', $evidence[0][0]);
        $query = "SELECT GROUP_CONCAT(nama_gangguan)   
            FROM penyakit   
            WHERE kode_gangguan IN('" . implode("','", $final) . "')";
        $result = $conn->query($query);
        $row = $result->fetch_row();

        $query2 = "SELECT id_gangguan 
            FROM penyakit   
            WHERE kode_gangguan IN('" . implode("','", $final) . "')";
        $result2 = $conn->query($query2);
        $test2 = array();
        while ($row2 = mysqli_fetch_row($result2)) {
            $test2[] = $row2;
        }
        $penyakit = array();
        for ($i = 0; $i < count($test2); $i++) {
            $penyakit[] = $test2[$i][0];
        }

        $data[] = array("Terdeteksi penyakit <b>{$row[0]}</b> dengan derajat kepercayaan <b>" . round($evidence[0][1] * 100, 2) . "</b>%");
        $data[] = array(round($evidence[0][1] * 100, 2));
        $data[] = $penyakit;
    } else {
        // echo "== MENENTUKAN NILAI DENSITAS ==\n";
        $data[] = array("<br><center><strong>== MENENTUKAN NILAI DENSITAS ==</strong></center>\n");
        $densitas_baru = array();
        $no = 1;
        while (!empty($evidence)) {
            $data[] = array("<center>== ITERASI KE-" . $no . " ==</center>\n");
            $densitas1[0] = array_shift($evidence);
            $densitas1[1] = array($fod, 1 - $densitas1[0][1]);
            // Theta Gejala Pertama
            // var_dump($densitas1[1]);
            $densitas2 = array();
            if (empty($densitas_baru)) {
                $densitas2[0] = array_shift($evidence);
                $densitas2[1] = array($fod, 1 - $densitas2[0][1]);
            } else {
                foreach ($densitas_baru as $k => $r) {
                    if ($k != "&theta;") {
                        $densitas2[] = array($k, $r);
                    }
                }
            }
            $theta = 1;
            foreach ($densitas2 as $d) $theta -= $d[1];
            $densitas2[] = array($fod, $theta);
            // var_dump($densitas2[1]);
            $m = count($densitas2);
            $densitas_baru = array();
            for ($y = 0; $y < $m; $y++) {
                for ($x = 0; $x < 2; $x++) {
                    if (!($y == $m - 1 && $x == 1)) {
                        $v = explode(',', $densitas1[$x][0]);
                        $w = explode(',', $densitas2[$y][0]);
                        sort($v);
                        sort($w);
                        $vw = array_intersect($v, $w);
                        if (empty($vw)) {
                            $k = "&theta;";
                        } else {
                            $k = implode(',', $vw);
                        }
                        if (!isset($densitas_baru[$k])) {
                            $densitas_baru[$k] = $densitas1[$x][1] * $densitas2[$y][1];
                        } else {
                            $densitas_baru[$k] += $densitas1[$x][1] * $densitas2[$y][1];
                        }
                    }
                }
            }
            foreach ($densitas_baru as $k => $d) {
                if ($k != "&theta;") {
                    $densitas_baru[$k] = $d / (1 - (isset($densitas_baru["&theta;"]) ? $densitas_baru["&theta;"] : 0));
                }
            }
            // print_r($densitas_baru);
            $keys     = array_keys($densitas_baru);
            $values     = array_values($densitas_baru);
            for ($i = 0; $i < count($densitas_baru); $i++) {
                for ($j = 0; $j < count($densitas_baru); $j++) {
                    if ($i == $j) {
                        $test = $keys[$i] . "=" . $values[$j];
                        $data[] = $test;
                    }
                }
            }
            $data[] = "<br>";
            $no++;
        }

        //--- perangkingan 
        // echo "== PERANGKINGAN ==\n";
        $data[] = array("<center><strong>== PERANGKINGAN ==</strong></center>\n");
        unset($densitas_baru["&theta;"]);
        arsort($densitas_baru);
        // print_r($densitas_baru);
        $keys     = array_keys($densitas_baru);
        $values     = array_values($densitas_baru);
        for ($i = 0; $i < count($densitas_baru); $i++) {
            for ($j = 0; $j < count($densitas_baru); $j++) {
                if ($i == $j) {
                    $test = $keys[$i] . "=" . $values[$j];
                    $data[] = $test;
                }
            }
        }
        $data[] = "<br>";
        // $data[] = array($densitas_baru);

        //--- menampilkan hasil akhir 
        $data[] = array("<center><strong>== HASIL AKHIR ==</strong></center>\n");
        $codes = array_keys($densitas_baru);
        $final_codes = explode(',', $codes[0]);
        $query = "SELECT GROUP_CONCAT(nama_gangguan)   
            FROM penyakit   
            WHERE kode_gangguan IN('" . implode("','", $final_codes) . "')";
        $result = $conn->query($query);
        $row = $result->fetch_row();

        $query2 = "SELECT id_gangguan 
            FROM penyakit   
            WHERE kode_gangguan IN('" . implode("','", $final_codes) . "')";
        $result2 = $conn->query($query2);
        $test2 = array();
        while ($row2 = mysqli_fetch_row($result2)) {
            $test2[] = $row2;
        }
        $penyakit = array();
        for ($i = 0; $i < count($test2); $i++) {
            $penyakit[] = $test2[$i][0];
        }
        // var_dump($penyakit);
        // die();
        $data[] = array("Terdeteksi penyakit <b>{$row[0]}</b> dengan derajat kepercayaan <b>" . round($densitas_baru[$codes[0]] * 100, 2) . "</b>%");
        $data[] = array(round($densitas_baru[$codes[0]] * 100, 2));
        $data[] = $penyakit;
    }

    echo json_encode($data);
}
