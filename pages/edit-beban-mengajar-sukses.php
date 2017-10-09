<?php
if (isset($_POST['masukdb'])) {
    $jumdata_makul = $_POST['jumdata_makul'];
    for ($i=0; $i < $jumdata_makul; $i++) { 
        $id_dosen = $_POST['id_dosen'];
        $makul = $_POST['makul'][$i];
        $kls = "kelas".$i;
        $tampung = $_POST[$kls];
        $kelas = implode(',', $tampung );
        $input = mysql_query("INSERT INTO makul_kelas (id_makul_kelas,id_dosen,id_makul,id_kelas) VALUES ('','$id_dosen','$makul','$kelas')");
    }
}
?>
<div class="row">
    <div class="col-md-12">
     <h3>Edit Data Berhasil</h3>   
        <h5><a href="?table=daftar-dosen">Lihat Seluruh Data</a></h5>
    </div>
</div>  

