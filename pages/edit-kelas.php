<?php
$id=$_GET['zonk'];
$query = mysql_query("SELECT * FROM kelas WHERE id_kelas='$id'");
$data = mysql_fetch_array($query);
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="?frm=edit-kelas-sukses&zonk=<?php echo $data['id_kelas']; ?>">
                                        <input type="hidden" name="id_prodi">
                                        <div class="form-group">
                                            <label>ID Kelas</label>
                                            <input type="text" name="id_kelas" class="form-control" value="<?php echo $id; ?>" readonly/>
                                        </div>
                                        <?php
                                            $id_prodi = $data['program_studi'];;
                                            $query_nama_prodi = mysql_query("SELECT * FROM program_studi WHERE id_prodi='$id_prodi'");
                                            $data2 = mysql_fetch_array($query_nama_prodi);

                                        ?>
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <input type="hidden" name="id_prodi" value="<?php echo $data['program_studi']; ?>">
                                            <input type="text" name="prodi" class="form-control" value="<?php echo $data2['nama_prodi']; ?>" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas']; ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="edit-kelas"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
