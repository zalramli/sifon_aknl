<?php
if ($_GET['delete']) {
    $id=$_GET['delete'];
    $delete = mysql_query("DELETE FROM dosen WHERE id_dosen='$id'");
    $delete2 = mysql_query("DELETE FROM user WHERE username='$id'");
}
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Dosen
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="datatables-example">
                                <thead>
                                    <th>No.</th>
                                    <th>Nama Dosen</th>
                                    <th>NIP</th>
                                    <th>Pangkat / Gol.</th>
                                    <th>Jurusan</th>
                                    <th>Program Studi</th>
                                    <th>Aksi</th>
                                </thead>
                            <?php
                                $no=1;
                                $query = mysql_query("SELECT * FROM dosen");
                                while ($row=mysql_fetch_array($query)) {
                            ?>
                                <tbody>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['nama_dosen']; ?></td>
                                    <td><?php echo $row['nip']; ?></td>
                                    <td><?php echo $row['pangkat_gol']; ?></td>
                                    <td><?php echo $row['jurusan']; ?></td>
                                    <td><?php echo $row['prodi']; ?></td>
                                    <td>
                                        <a href='?frm=edit-dosen&zonk=<?php echo $row['id_dosen']; ?>'>Edit</a> |
                                        <a onclick="return confirm('Anda Yakin Untuk Menghapus Data ?')" href="?table=daftar-dosen&delete=<?php echo $row['id_dosen']; ?>">Hapus</a>
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