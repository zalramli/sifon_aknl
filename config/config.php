<?php
$server='localhost';
$username='root';
$password='';
$db='sifon_aknl';

$connect= mysql_connect($server,$username,$password);
$database = mysql_select_db($db);
?>