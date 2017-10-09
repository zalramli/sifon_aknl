<div class="col-md-9 col-sm-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Pengisian Nilai
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#presensi" data-toggle="tab">Presensi</a>
                                </li>
                                <li class=""><a href="#quiz" data-toggle="tab">Quiz</a>
                                </li>
                                <li class=""><a href="#tugas" data-toggle="tab">Tugas</a>
                                </li>
                                <li class=""><a href="#praktek" data-toggle="tab">Praktek</a>
                                </li>
                                <li class=""><a href="#uts" data-toggle="tab">UTS</a>
                                </li>
                                <li class=""><a href="#uas" data-toggle="tab">UAS</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="presensi">
                                <br>
                                        <form method="post" name="input_presensi">
                                        <table class="table   table-bordered table-hover" id="datatables-example">
                                            <thead>
                                                <th>No.</th>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Nilai</th>
                                            </thead>
                                        <?php
                                            $no=1;
                                            $query = mysql_query("SELECT * FROM kelas_mahasiswa");
                                            while ($row=mysql_fetch_array($query)) {
                                        ?>
                                            <tbody>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nim']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="nilai[]" class="input-hover form-control"></td>
                                            </tbody>
                                        <?php
                                            }

                                        ?>
                                        </table>
                                        </form>
                                </div>
                                <div class="tab-pane fade" id="quiz">
                                    <br>
                                        <form method="post" name="input_quiz">
                                        <table class="table   table-bordered table-hover" id="datatables-example">
                                            <thead>
                                                <th>No.</th>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Nilai</th>
                                            </thead>
                                        <?php
                                            $no=1;
                                            $query = mysql_query("SELECT * FROM kelas_mahasiswa");
                                            while ($row=mysql_fetch_array($query)) {
                                        ?>
                                            <tbody>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nim']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="nilai[]" class="input-hover form-control"></td>
                                            </tbody>
                                        <?php
                                            }

                                        ?>
                                        </table>
                                        </form>
                                </div>
                                <div class="tab-pane fade" id="tugas">
                                    <br>
                                        <form method="post" name="input_tugas">
                                        <table class="table   table-bordered table-hover" id="datatables-example">
                                            <thead>
                                                <th>No.</th>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Nilai</th>
                                            </thead>
                                        <?php
                                            $no=1;
                                            $query = mysql_query("SELECT * FROM kelas_mahasiswa");
                                            while ($row=mysql_fetch_array($query)) {
                                        ?>
                                            <tbody>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nim']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="nilai[]" class="input-hover form-control"></td>
                                            </tbody>
                                        <?php
                                            }

                                        ?>
                                        </table>
                                        </form>
                                </div>
                                <div class="tab-pane fade" id="praktek">
                                    <br>
                                        <form method="post" name="input_praktek">
                                        <table class="table   table-bordered table-hover" id="datatables-example">
                                            <thead>
                                                <th>No.</th>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Nilai</th>
                                            </thead>
                                        <?php
                                            $no=1;
                                            $query = mysql_query("SELECT * FROM kelas_mahasiswa");
                                            while ($row=mysql_fetch_array($query)) {
                                        ?>
                                            <tbody>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nim']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="nilai[]" class="input-hover form-control"></td>
                                            </tbody>
                                        <?php
                                            }

                                        ?>
                                        </table>
                                        </form>
                                </div>
                                <div class="tab-pane fade" id="uts">
                                    <br>
                                        <form method="post" name="input_uts">
                                        <table class="table   table-bordered table-hover" id="datatables-example">
                                            <thead>
                                                <th>No.</th>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Nilai</th>
                                            </thead>
                                        <?php
                                            $no=1;
                                            $query = mysql_query("SELECT * FROM kelas_mahasiswa");
                                            while ($row=mysql_fetch_array($query)) {
                                        ?>
                                            <tbody>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nim']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="nilai[]" class="input-hover form-control"></td>
                                            </tbody>
                                        <?php
                                            }

                                        ?>
                                        </table>
                                        </form>
                                </div>
                                <div class="tab-pane fade" id="uas">
                                    <br>
                                        <form method="post" name="input_uas">
                                        <table class="table   table-bordered table-hover" id="datatables-example">
                                            <thead>
                                                <th>No.</th>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Nilai</th>
                                            </thead>
                                        <?php
                                            $no=1;
                                            $query = mysql_query("SELECT * FROM kelas_mahasiswa");
                                            while ($row=mysql_fetch_array($query)) {
                                        ?>
                                            <tbody>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nim']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><input style="border:0px;width:100%;height:21px;margin-top:-2px;" type="text" name="nilai[]" class="input-hover form-control"></td>
                                            </tbody>
                                        <?php
                                            }

                                        ?>
                                        </table>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>