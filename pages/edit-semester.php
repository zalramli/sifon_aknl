<?php
$id=$_GET['zonk'];
$query = mysql_query("SELECT * FROM semester WHERE id_semester='$id'");
$data = mysql_fetch_array($query);
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Semester
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="?frm=edit-semester-sukses&zonk=<?php echo $data['id_semester']; ?>">
                                        <div class="form-group">
                                            <label>Semester</label>
                                            <input type="text" name="semester" class="form-control" value="<?php echo $data['semester'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Periode</label>
                                            <input type="text" name="periode" class="form-control" value="<?php echo $data['periode']; ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="edit-kelas"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
