<?php
    $id = $_GET['zonk'];
    $semester = $_POST['semester'];
    $periode = $_POST['periode'];
    $update = mysql_query("UPDATE semester SET semester='$semester', periode='$periode' WHERE id_semester='$id'");
?>
<div class="row">
    <div class="col-md-12">
     <h3>Edit Data Berhasil</h3>   
        <h5><a href="?table=daftar-semester">Lihat Seluruh Data</a></h5>
    </div>
</div>     