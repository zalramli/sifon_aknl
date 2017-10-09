<?php
$id=$_GET['zonk'];
$query = mysql_query("SELECT * FROM beban_mengajar WHERE id_beban_mengajar='$id'");
$data = mysql_fetch_array($query);
$id_dosen = $data['id_dosen'];
$cheked = explode(',',$data['prodi']);

$query_dosen = mysql_query("SELECT * FROM dosen WHERE id_dosen='$id_dosen'");
$fetch_dosen = mysql_fetch_array($query_dosen);
$nama_dosen = $fetch_dosen['nama_dosen'];
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Beban Mengajar
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="?frm=edit-beban-mengajar-tahap2&zonk=<?php echo $data['id_beban_mengajar']; ?>">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="hidden" name="id_dosen" value="<?php echo $id_dosen; ?>">
                                            <input type="text" name="nama" class="form-control" value="<?php echo $nama_dosen; ?>" readonly/>
                                        </div>
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
                                        <button type="submit" class="btn btn-primary" name="edit-beban-mengajar"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
