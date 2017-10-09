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
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Beban Mengajar Baru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="?frm=input-beban-mengajar-tahap2">
                                        <input type="hidden" name="id_beban_mengajar">
                                        <div class="form-group">
                                            <label>Dosen</label>
                                            <select class="form-control" name="dosen">
                                                <option>-- Pilih Dosen --</option>
                                                <?php
                                                $query = mysql_query("SELECT * FROM dosen");
                                                while ($data=mysql_fetch_array($query)) {
                                                    echo "<option value='$data[id_dosen]'>$data[nama_dosen]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                           <label>Mata Kuliah</label><br>
                                           <?php
                                            $query2 = mysql_query("SELECT * FROM mata_kuliah");
                                            $no=1;
                                            while ($data2=mysql_fetch_array($query2)) {
                                                echo "<input type='checkbox' value='".$data2['kode']."' name='mk[]' /> ".$data2['nama_makul']."<br />";
                                            $no++;
                                            }
                                           ?> 
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary" name="masukdatabase"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
