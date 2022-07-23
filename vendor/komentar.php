<?php

$draft = file_get_contents("data.json");

$draft = json_decode($draft, TRUE);

$file = "data.json";

$nama=$_POST['nama'];
$isi=$_POST['isikomen'];

$anggota = file_get_contents($file);

$data = json_decode($anggota, false);

$data [] = array(
    "nama" => $nama,
    "isi"  => $isi,
    "waktu" => ''
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$anggota = file_put_contents($file, $jsonfile);
echo "/n";
$datas = file_get_contents($file);
echo $datas;
$s=fopen('datakomen.js','w');

 fwrite($s,"au=`".$datas."`;");

 fclose($s);
?>