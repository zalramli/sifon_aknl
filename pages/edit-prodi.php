<?php
$id=$_GET['zonk'];
$query = mysql_query("SELECT * FROM program_studi WHERE id_prodi='$id'");
$data = mysql_fetch_array($query);
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Prodi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="?frm=edit-prodi-sukses&zonk=<?php echo $data['id_prodi']; ?>">
                                        <input type="hidden" name="id_prodi">
                                        <div class="form-group">
                                            <label>Nama Prodi</label>
                                            <input type="text" name="nama_prodi" class="form-control" value="<?php echo $data['nama_prodi'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Singkatan Nama Prodi</label>
                                            <input type="text" name="singkatan" class="form-control" value="<?php echo $data['singkatan']; ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="edit-prodi"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
