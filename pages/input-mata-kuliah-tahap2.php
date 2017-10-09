<?php
    $tahun=date("y");
    $semester = $_POST['semester'];
    $periode = $_POST['periode'];
    $kode_awal_makul = "K".$_POST['prodi'].$tahun.$semester;
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Mata Kuliah
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" method="POST" action="?frm=input-mata-kuliah">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kode Makul</label>
                                            <input type="text" class="form-control" name="kode_awal_makul" value="<?php echo "$kode_awal_makul"; ?>">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label>Nama Mata Kuliah</label>
                                            <input type="text" name="nama_makul" class="form-control" placeholder="Masukkan Nama Mata Kuliah">
                                        </div>
                                        <div class="form-group">
                                            <label>SKS Teori</label>
                                            <input type="text" name="sks_teori" class="form-control" placeholder="Masukkan Jumlah SKS Teori">
                                        </div>
                                        <div class="form-group">
                                            <label>SKS Praktek</label>
                                            <input type="text" name="sks_praktek" class="form-control" placeholder="Masukkan Jumlah SKS Praktek">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Jam  Teori Per Minggu</label>
                                            <input type="text" name="teori_minggu" class="form-control" placeholder="Masukkan Jumlah Jam Teori Per Minggu">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Jam  Praktek Per Minggu</label>
                                            <input type="text" name="praktek_minggu" class="form-control" placeholder="Masukkan Jumlah Jam Praktek Per Minggu">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="masukdatabase"> Submit </button>
                                    </div>
                                    <div class="col-md-3">
                                            <div class="form-group">
                                                <br>
                                                <select class="form-control" name="kode_akhir_makul" style="margin-top:5px;">
                                                    <?php
                                                    for ($i=1; $i <10 ; $i++) {
                                                    ?>
                                                    <option value="<?php echo "00$i"; ?>"><?php echo "00$i"; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
