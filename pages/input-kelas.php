<?php
if (isset($_POST['masukdatabase'])) {
    $id_kelas=$_POST['id_kelas'];
    $prodi = $_POST['prodi'];
    $kelas = $_POST['kelas'];

    $insert = mysql_query("INSERT INTO kelas (id_kelas,program_studi,kelas) VALUES ('$id_kelas','$prodi','$kelas')");
    if ($insert) {
        echo "<script>alert('Berhasil Menambah Kelas')</script>";
    }
}
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Kelas Baru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <input type="hidden" name="id_kelas">
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select class="form-control" name="prodi">
                                                <option>-- Pilih Program Studi --</option>
                                                <?php
                                                $query = mysql_query("SELECT * FROM program_studi");
                                                while ($data=mysql_fetch_array($query)) {
                                                    echo "<option value='$data[id_prodi]'>$data[nama_prodi]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input type="text" name="kelas" class="form-control" placeholder="Masukkan Nama Kelas">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="masukdatabase"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
