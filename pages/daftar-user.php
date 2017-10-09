<?php
if ($_GET['delete']) {
    $id=$_GET['delete'];
    $delete = mysql_query("DELETE FROM user WHERE id_user='$id'");
}
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar User
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="datatables-example">
                                <thead>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </thead>
                            <?php
                                $no=1;
                                $query = mysql_query("SELECT * FROM user");
                                while ($row=mysql_fetch_array($query)) {
                            ?>
                                <tbody>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td><?php echo $row['level']; ?></td>
                                    <td>
                                        <a href='?frm=edit-user&zonk=<?php echo $row['id_user']; ?>'>Edit</a> |
                                        <a onclick="return confirm('Anda Yakin Untuk Menghapus Data ?')" href="?table=daftar-user&delete=<?php echo $row['id_user']; ?>">Hapus</a>
                                    </td>
                                </tbody>
                            <?php
                                }

                            ?>
                            </table>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>