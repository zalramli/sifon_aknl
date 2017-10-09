<?php
if (isset($_POST['input'])) {
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $program_studi = $_POST['program_studi'];
    $kelas = $_POST['kelas'];

    $input=mysql_query("INSERT INTO mahasiswa (nim,nama,jenis_kelamin,program_studi,kelas) VALUES ('$nim','$nama_mhs','$jenis_kelamin','$program_studi','$kelas')");
    if ($input) {
        echo "<script>alert('Input Data Mahasiswa Berhasil')</script>";
    } else {
        echo "<script>alert('Input Data Gagal')</script>";
    }
}  
$query_parent = mysql_query("SELECT * FROM program_studi") or die("Query failed: ".mysql_error());
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="assets/js/jquery_combobox.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#prodi").change(function() {
        $.get('ambilmahasiswa.php?prodi=' + $(this).val(), function(data) {
            $("#kelas").html(data);
            $('#loader').slideUp(200, function() {
                $(this).remove();
            });
        }); 
    });
});
</script>

</head>

<body>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Mahasiswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM Siswa" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input type="text" name="nama_mhs" class="form-control" placeholder="Masukkan Nama Mahasiswa" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Program Studi</label>
                                            <select class="form-control" name="program_studi" id="prodi">
                                                <option>--Pilih Prodi--</option>
                                                <?php while($row = mysql_fetch_array($query_parent)): ?>
                                                <option value="<?php echo $row['id_prodi']; ?>"><?php echo $row['nama_prodi']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas" id="kelas"></select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="input"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</body>
</html>
