<?php
if ($_GET['delete']) {
    $id=$_GET['delete'];
    $delete = mysql_query("DELETE FROM dosen WHERE id_dosen='$id'");
}
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Prodi
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="datatables-example">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="text-align:center;padding-bottom:30px;height:3px;">No.</th>
                                        <th rowspan="2" style="text-align:center;padding-bottom:30px;">Kode Mata Kuliah</th>
                                        <th rowspan="2" style="text-align:center;padding-bottom:30px;">Nama Mata Kuliah</th>
                                        <th colspan="3" style="text-align:center;">SKS</th>
                                        <th colspan="3" style="text-align:center">Jam/Minggu</th>
                                        <th rowspan="2" style="text-align:center;padding-bottom:30px;">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th>Jumlah</th>
                                        <th>Teori</th>
                                        <th>Praktek</th>
                                        <th>Jumlah</th>
                                        <th>Teori</th>
                                        <th>Praktek</th>
                                    </tr>
                                </thead>
                            <?php
                                $no=1;
                                $query = mysql_query("SELECT * FROM mata_kuliah");
                                while ($row=mysql_fetch_array($query)) {
                            ?>
                                <tbody>
                                    <td style="text-align:center;"><?php echo $no++."."; ?></td>
                                    <td><?php echo $row['kode']; ?></td>
                                    <td><?php echo $row['nama_makul']; ?></td>
                                    <td><?php echo $row['sks_jumlah']; ?></td>
                                    <td><?php echo $row['sks_teori']; ?></td>
                                    <td><?php echo $row['sks_praktek']; ?></td>
                                    <td><?php echo $row['jumlah_minggu']; ?></td>
                                    <td><?php echo $row['teori_minggu']; ?></td>
                                    <td><?php echo $row['praktek_minggu']; ?></td>
                                    <td>
                                        <a href='?frm=edit-prodi&zonk=<?php echo $row['id_prodi']; ?>'>Edit</a> |
                                        <a onclick="return confirm('Anda Yakin Untuk Menghapus Data ?')" href="?table=daftar-prodi&delete=<?php echo $row['id_prodi']; ?>">Hapus</a>
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