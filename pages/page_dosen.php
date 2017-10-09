<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Dosen
                        </div>
                            <?php
                                $id_dosen = $_SESSION['username'];
                                $query = mysql_query("SELECT * FROM dosen WHERE id_dosen='$id_dosen'");
                                $data = mysql_fetch_array($query);
                            ?>
                        <div class="panel-body">
                            <h4>&nbsp;&nbsp;&nbsp;&nbsp;Selamat Datang Di Sistem Informasi Nilai AKN Lumajang</h4>
                            <table class="table table-bordered  table-hover" id="dataTables-example" style="width:60%;">
                                <tr>
                                    <td style="width:25%">ID Dosen</td>
                                    <td style="text-align:center;width:3%">:</td>
                                    <td><?php echo $data['id_dosen']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width:25%">Nama Dosen</td>
                                    <td style="text-align:center;width:3%">:</td>
                                    <td><?php echo $data['nama_dosen']; ?></td>
                                </tr>
                                <tr>
                                    <td>Pangkat / Gol</td>
                                    <td style="text-align:center">:</td>
                                    <td><?php echo $data['pangkat_gol']; ?></td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td style="text-align:center">:</td>
                                    <td><?php echo $data['nip']; ?></td>
                                </tr>
                                <tr>
                                    <td>Prodi</td>
                                    <td style="text-align:center">:</td>
                                    <td><?php echo $data['prodi']; ?></td>
                                </tr>
                            </table>
                            <a href="dashboard.php?frm=pilih-pilih-kelas" class="btn btn-primary">Next</a>
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