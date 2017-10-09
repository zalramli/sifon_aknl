<?php 
include('config/config.php');
session_start();
error_reporting();
$username =  $_SESSION['username'];
$makul = $_GET['mata_kuliah'];
$query= mysql_query("SELECT * FROM makul_kelas where id_dosen='$username' AND id_makul='$makul'");
$fetch_data = mysql_fetch_array($query);
$pecah = explode(",",$fetch_data['3']);
$jumData = count($pecah);
for ($i=0; $i <$jumData ; $i++) { 
    $pecahh = $pecah[$i];
    $query_kelas=mysql_query("SELECT * FROM kelas WHERE id_kelas='$pecahh'");
    $fetch_kelas = mysql_fetch_array($query_kelas);
    $data_kelas = $fetch_kelas['kelas'];
    echo "<option value='$pecahh'> $data_kelas</option>";
}
?>