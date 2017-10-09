<?php
    $id = $_GET['zonk'];
    $nama_mhs=$_POST['nama_mhs'];
    $jk = $_POST['jenis_kelamin'];
    $prodi = $_POST['program_studi'];
    $kelas = $_POST['kelas'];
    $update = mysql_query("UPDATE mahasiswa SET nama='$nama_mhs', jenis_kelamin='$jk', program_studi='$prodi', kelas='$kelas' WHERE nim='$id'");
?>
<div class="row">
    <div class="col-md-12">
     <h3>Edit Data Berhasil</h3>   
        <h5><a href="?table=daftar-mahasiswa">Lihat Seluruh Data</a></h5>
    </div>
</div>     