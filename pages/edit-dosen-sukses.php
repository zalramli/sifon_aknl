<?php
    $id = $_GET['zonk'];
   	$nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $pangkat=$_POST['pangkat'];
    $jurusan=$_POST['jurusan'];
    $prodi = implode(',',$_POST['prodi']);

     $update = mysql_query("UPDATE dosen SET nama_dosen='$nama', nip='$nip', pangkat_gol='$pangkat', jurusan='$jurusan', prodi='$prodi' WHERE id_dosen='$id'");
     if ($update) {
		echo "<script>alert('Edit Data Dosen Sukses')</script>";
	}
    else {
        echo "eror";
    }
?>
<div class="row">
    <div class="col-md-12">
     <h3>Edit Data Berhasil</h3>   
        <h5><a href="?table=daftar-dosen">Lihat Seluruh Data</a></h5>
    </div>
</div>  

