<?php
$id=$_GET['zonk'];
$query = mysql_query("SELECT * FROM dosen WHERE id_dosen='$id'");
$data = mysql_fetch_array($query);
$cheked = explode(',',$data['prodi']);
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Dosen
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="?frm=edit-dosen-sukses&zonk=<?php echo $data['id_dosen']; ?>">
                                        <input type="hidden" name="id_dosen">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_dosen']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" name="nip" class="form-control" value="<?php echo $data['nip']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Pangkat/Gol</label>
                                            <input type="text" name="pangkat" class="form-control" value="<?php echo $data['pangkat_gol']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input type="text" name="jurusan" class="form-control" value="<?php echo $data['jurusan']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="prodi[]" value="Teknik Geodesi" <?php in_array('Teknik Geodesi', $cheked) ? print "checked" : ""; ?>> Teknik Geodesi <br>
                                            <input type="checkbox" name="prodi[]" value="Teknik Otomotif" <?php in_array('Teknik Otomotif', $cheked) ? print "checked" : ""; ?>>  Teknik Otomotif<br>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="edit-dosen"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
