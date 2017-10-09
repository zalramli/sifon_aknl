<?php
if (isset($_POST['masukdatabase'])) {
    $id_prodi = $_POST['id_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $singkatan = $_POST['singkatan'];

    $insert = mysql_query("INSERT INTO program_studi (id_prodi,nama_prodi,singkatan) VALUES ('$id_prodi','$nama_prodi','$singkatan')");
    if ($insert) {
        echo "<script>alert('Berhasil Menambah Prodi')</script>";
    }
}
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Prodi Baru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <input type="hidden" name="id_prodi">
                                        <div class="form-group">
                                            <label>Nama Prodi</label>
                                            <input type="text" name="nama_prodi" class="form-control" placeholder="Masukkan Nama Prodi" />
                                        </div>
                                        <div class="form-group">
                                            <label>Singkatan Nama Prodi</label>
                                            <input type="text" name="singkatan" class="form-control" placeholder="Masukkan Singkatan Nama Prodi">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="masukdatabase"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
