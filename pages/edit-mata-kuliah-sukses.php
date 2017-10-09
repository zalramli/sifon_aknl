<?php
    $id = $_GET['zonk'];
    $nama_prodi = $_POST['nama_prodi'];
    $singkatan = $_POST['singkatan'];
    $update = mysql_query("UPDATE program_studi SET nama_prodi='$nama_prodi',singkatan='$singkatan' WHERE id_prodi='$id'");
?>
<div class="row">
    <div class="col-md-12">
     <h3>Edit Data Berhasil</h3>   
        <h5><a href="?table=daftar-mata-kuliah">Lihat Seluruh Data</a></h5>
    </div>
</div>     