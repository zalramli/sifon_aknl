<?php
    $id = $_GET['zonk'];
    $prodi = $_POST['id_prodi'];
    $kelas = $_POST['kelas'];
    $update = mysql_query("UPDATE kelas SET program_studi='$prodi', kelas='$kelas' WHERE id_kelas='$id'");
?>
<div class="row">
    <div class="col-md-12">
     <h3>Edit Data Berhasil</h3>   
        <h5><a href="?table=daftar-kelas">Lihat Seluruh Data</a></h5>
    </div>
</div>     