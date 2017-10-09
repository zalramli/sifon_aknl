<?php
if (isset($_POST['masukdatabase'])) {
    $id_semester = $_POST['id_semester'];
    $semester = $_POST['semester'];
    $periode = $_POST['periode'];

    $input = mysql_query("INSERT INTO semester (id_semester,semester,periode) VALUES ('$id_semester','$semester','$periode')");
    if ($input) {
        echo "<script>alert('Berhasil Menambahkan Data')</script>";
    }

}
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Semester
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <input type="hidden" name="id_semester">
                                        <div class="form-group">
                                            <label>Semester</label>
                                            <select class="form-control" name="semester">
                                                <option>-- Pilih Semester --</option>
                                                <option value="1">Ganjil</option>
                                                <option value="2">Genap</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Periode</label>
                                            <input type="text" name="periode" class="form-control" placeholder="Masukkan Periode, Contoh : 2000/2001">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="masukdatabase"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
