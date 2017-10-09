<?php 
include('config/config.php');
session_start();
error_reporting();
$username =  $_SESSION['username'];
$query= mysql_query("SELECT * FROM beban_mengajar where id_dosen='$username'");
$fetch_data = mysql_fetch_array($query);
$pecah = explode(",",$fetch_data['2']);
$jumData = count($pecah);
for ($i=0; $i <$jumData ; $i++) { 
    $pecahh = $pecah[$i];
    $query_makul=mysql_query("SELECT * FROM mata_kuliah WHERE kode='$pecahh'");
    $fetch_makul = mysql_fetch_array($query_makul);
    $data_makul = $fetch_makul['nama_makul'];
    echo "<option value='$pecahh'>$pecahh - $data_makul</option>";
}
?>