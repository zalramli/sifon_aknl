<?php
$id=$_GET['zonk'];
$query = mysql_query("SELECT * FROM mahasiswa WHERE nim='$id'");
$data = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Mahasiswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="?frm=edit-mahasiswa-sukses&zonk=<?php echo $data['nim']; ?>">
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <input type="text" name="nim" class="form-control" value="<?php echo $data['nim']; ?>" placeholder="Masukkan NIM Siswa" readonly=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input type="text" name="nama_mhs" value="<?php echo $data['nama']; ?>" class="form-control" placeholder="Masukkan Nama Mahasiswa" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="L" <?php $data['jenis_kelamin'] =='L' ? print "selected" : ""; ?>>Laki-Laki</option>
                                                <option value="P" <?php $data['jenis_kelamin'] =='P' ? print "selected" : ""; ?>>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select class="form-control" name="program_studi">
                                                <option>-- Pilih Program Studi --</option>
                                                <option value="1" <?php $data['program_studi'] =='1' ? print "selected" : ""; ?>>Teknik Geodesi</option>
                                                <option value="2" <?php $data['program_studi'] =='2' ? print "selected" : ""; ?>>Teknik Otomotif</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas">
                                                <?php
                                                $id_kelas = $data['kelas'];
                                                $query_kelas = mysql_query("SELECT * FROM kelas WHERE id_kelas='$id_kelas'");
                                                $fetch_nama_kelas = mysql_fetch_array($query_kelas);
                                                $nama_kelas = $fetch_nama_kelas['kelas'];
                                                ?>
                                                <option value="<?php echo "$id_kelas"; ?>"><?php echo "$nama_kelas"; ?></option>
                                                <?php
                                                $query_all_kelas = mysql_query("SELECT * FROM kelas");
                                                while ($fetch_kelas=mysql_fetch_array($query_all_kelas)) {
                                                ?>
                                                <option value="<?php echo $fetch_kelas['id_kelas']; ?>"><?php echo $fetch_kelas['kelas']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="edit-prodi"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>

</body>
</html>
