<?php 
include('config/config.php');
$prodi = $_GET['prodi'];

$query = mysql_query("SELECT * FROM kelas WHERE program_studi='$prodi'");
while ($data=mysql_fetch_array($query)) {
	echo "<option value='$data[id_kelas]'>$data[kelas]</option>";
}

?>