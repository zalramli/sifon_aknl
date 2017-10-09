<?php
    $id = $_GET['zonk'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $update = mysql_query("UPDATE user SET username='$username',password='$password',level='$level' WHERE id_user='$id'");
?>
<div class="row">
    <div class="col-md-12">
     <h3>Edit Data Berhasil</h3>   
        <h5><a href="?table=daftar-user">Lihat Seluruh Data</a></h5>
    </div>
</div>     