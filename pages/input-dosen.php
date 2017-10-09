<?php
if (isset($_POST['masukdatabase'])) {
    $id=$_POST['id_dosen'];

    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = 'Dosen';

    $insert_user = mysql_query("INSERT INTO user (id_user,username,password,level) VALUES ('$id','$username','$password','$level')");

    $nama=$_POST['nama'];
    $nip=$_POST['nip'];
    $pangkat=$_POST['pangkat'];
    $jurusan=$_POST['jurusan'];
    $prodi = implode(',',$_POST['prodi']);

    $insert = mysql_query("INSERT INTO dosen (id_dosen,nama_dosen,nip,pangkat_gol,jurusan,prodi) VALUES ('$username','$nama','$nip','$pangkat','$jurusan','$prodi')");
    if ($insert) {
        echo "<script>alert('Berhasil Menambah Anggota Dosen')</script>";
    }
}
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Dosen Baru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <input type="hidden" name="id_dosen">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo autogenerate('id_dosen','dosen',4,'DSN'); ?>" readonly="">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Masukan Password Untuk Login Dosen">
                                        </div> 
                                        <hr>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Dosen">
                                        </div>

                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" name="nip" class="form-control" placeholder="Masukan NIP">
                                        </div> 

                                        <div class="form-group">
                                            <label>Pangkat/Gol</label>
                                            <input type="text" name="pangkat" class="form-control" placeholder="Masukkan Pangkat">
                                        </div> 

                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan">
                                        </div>                                      

                                        <div class="form-group">
                                            <label>Program Studi Yang Diajarkan</label><br>
                                            <input type="checkbox" name="prodi[]" value="Teknik Geodesi">Teknik Geodesi <br>
                                            <input type="checkbox" name="prodi[]" value="Teknik Otomotif">Teknik Otomotif  <br>
                                            </select>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-primary" name="masukdatabase"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>