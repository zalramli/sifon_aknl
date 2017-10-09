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
      function startCalc(){
      interval = setInterval("calc()",1);
      }
      function calc(){
      presensi = document.pilih_kelas.bobot_presensi.value;
      quiz = document.pilih_kelas.bobot_quiz.value;
      tugas = document.pilih_kelas.bobot_tugas.value;
      praktek = document.pilih_kelas.bobot_praktek.value;
      uts = document.pilih_kelas.bobot_uts.value;
      uas = document.pilih_kelas.bobot_uas.value;
      document.pilih_kelas.bobot_total.value = (presensi * 1) + (quiz * 1) + (tugas * 1) + (praktek * 1) + (uts * 1) + (uas * 1);
      }
      function stopCalc(){
      clearInterval(interval);
      }
</script>
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
    <form name="pilih_kelas" role="form" method="POST" action="?table=daftar-kelas-mahasiswa">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Isi Bobot Penilaian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                      <label>Presensi</label>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="bobot_presensi" onFocus="startCalc();" onBlur="stopCalc();" value="0">
                                            <span class="input-group-addon">%</span>
                                        </div>
                                        <label>Quiz</label>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="bobot_quiz" onFocus="startCalc();" onBlur="stopCalc();" value="0">
                                            <span class="input-group-addon">%</span>
                                        </div>
                                        
                                        <label>Tugas</label>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="bobot_tugas" onFocus="startCalc();" onBlur="stopCalc();" value="0">
                                            <span class="input-group-addon">%</span>
                                        </div>

                                        <label>Praktek</label>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="bobot_praktek" onFocus="startCalc();" onBlur="stopCalc();" value="0">
                                            <span class="input-group-addon">%</span>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                      <label>UTS</label>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="bobot_uts" onFocus="startCalc();" onBlur="stopCalc();" value="0">
                                            <span class="input-group-addon">%</span>
                                        </div>

                                        <label>UAS</label>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="bobot_uas" onFocus="startCalc();" onBlur="stopCalc();" value="0">
                                            <span class="input-group-addon">%</span>
                                        </div>                                      
                                        <label>Total</label>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="bobot_total" readonly="" value="0">
                                            <span class="input-group-addon">%</span>
                                        </div>

                                        <label>&nbsp;</label>
                                        <div class="form-group">
                                           <button type="submit" class="btn btn-primary" name="masukdatabase"> Submit </button> 
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </form>
</body>
</html>
