<?php
if (isset($_POST['masukdatabase'])) {
    // $kode2 =autogenerate ('kode','mata_kuliah',3,$kode1);
    $kode = $_POST['kode_awal_makul'].$_POST['kode_akhir_makul'];
    $nama_makul =$_POST['nama_makul'];
    $sks_teori = $_POST['sks_teori'];
    $sks_praktek = $_POST['sks_praktek'];
    $sks_jumlah = $sks_teori + $sks_praktek;
    $teori_minggu=$_POST['teori_minggu'];
    $praktek_minggu = $_POST['praktek_minggu'];
    $jumlah_minggu = $teori_minggu + $praktek_minggu;

    $query_id_semester = mysql_query("SELECT * FROM semester WHERE semester='$semester' AND periode='$periode'");
    $fetch_id_semester = mysql_fetch_array($query_id_semester);
    $id_semester = $fetch_id_semester['id_semester'];
   
    $input = mysql_query("INSERT INTO mata_kuliah (kode,id_semester,nama_makul,sks_jumlah,sks_teori,sks_praktek,jumlah_minggu,teori_minggu,praktek_minggu) VALUES ('$kode','$id_semester','$nama_makul','$sks_jumlah','$sks_teori','$sks_praktek','$jumlah_minggu','$teori_minggu','$praktek_minggu')");
    if ($input) {
        echo "<script>alert('Input Data Sukses')</script>";
    } else {
        echo "<Script>alert('Kode Sudah Tersedia, Coba Dengan Kode Lain')</script>".mysql_error();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Mata Kuliah
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="?frm=input-mata-kuliah-tahap2">
                                        <div class="form-group">
                                            <label>Prodi</label>
                                            <select class="form-control" name="prodi" id="prodi" onfocus="" onblur="">
                                                <option value="GM">Teknik Geodesi</option>
                                                <option value="OM">Teknik Otomotif</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Semester</label>
                                            <select class="form-control " name="semester" id="semester">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="masukdb"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>

</body>
</html>
