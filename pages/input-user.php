<?php
if (isset($_POST['masukdatabase'])) {
    $id_user=$_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $level = $_POST['level'];

    if ($password==$cpassword) {

    $insert = mysql_query("INSERT INTO user (id_user,username,password,level) VALUES ('$id_user','$username','$password','$level')");
    if ($insert) {
        echo "<script>alert('Berhasil Menambah User')</script>";
    } 
    } else {
         echo "<script>alert('Konfirmasi Password Anda Salah')</script>";

    
    }
}
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input User Baru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                        <input type="hidden" name="id_user">

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                        </div>

                                        <div class="form-group">
                                            <label>Konfirmasi Password</label>
                                            <input type="password" name="cpassword" class="form-control" placeholder="Masukkan Konfirmasi Password">
                                        </div>

                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level">
                                                <option>-- Pilih Level User --</option>
                                                <option value="Admin"> Admin </option>
                                                <option value="Operator"> Operator </option>
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
