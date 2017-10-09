<?php 
include('config.php');
$query_parent = mysql_query("SELECT * FROM program_studi") or die("Query failed: ".mysql_error());
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="assets/js/jquery_combobox.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#semester").change(function() {
        $.get('ambilmatakuliah.php?semester=' + $(this).val(), function(data) {
            $("#mata_kuliah").html(data);
            $('#loader').slideUp(200, function() {
                $(this).remove();
            });
        }); 
    });
});
$(document).ready(function() {
    $("#mata_kuliah").change(function() {
        $.get('ambilkelasmahasiswa.php?mata_kuliah=' + $(this).val(), function(data) {
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
    <form name="pilih_kelas" role="form" method="POST" action="pages-print/print_daftar_kelas_mahasiswa.php">
    <div class="row">
                <div class="col-md-4">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pilih Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select class="form-control" name="prodi">
                                                <option>--Pilih Prodi</option>
                                                <?php
                                                $query_prodi = mysql_query("SELECT * FROM program_studi");
                                                while ($data_prodi=mysql_fetch_array($query_prodi)) {
                                                    echo "<option value='$data_prodi[id_prodi]'>$data_prodi[nama_prodi]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Semester</label>
                                            <select class="form-control" name="semester" id="semester">
                                                <option>-- Pilih Semester --</option>
                                                <?php
                                                $query_semester = mysql_query("SELECT * FROM semester");
                                                while ($data_semester=mysql_fetch_array($query_semester)) {
                                                    echo "<option value='$data_semester[id_semester]'>$data_semester[semester] - $data_semester[periode]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Mata Kuliah</label>
                                            <select class="form-control" name="mata_kuliah" id="mata_kuliah">
                                                <option value="">-- Mata Kuliah -- </option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas" id="kelas">
                                                <option value="">-- Pilih Kelas --</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary" name="masukdatabase" type="submit"> Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </form>
</body>
</html>
