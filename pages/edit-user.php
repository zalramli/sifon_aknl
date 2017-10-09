<?php
$id=$_GET['zonk'];
$query = mysql_query("SELECT * FROM user WHERE id_user='$id'");
$data = mysql_fetch_array($query);
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" action="?frm=edit-user-sukses&zonk=<?php echo $data['id_user']; ?>">
                                        <input type="hidden" name="id_user">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>" readonly=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level">
                                                <option>-- Pilih Level User --</option>
                                                <option value="Admin" <?php $data['level'] =='Admin' ? print "selected" : ""; ?> >Admin </option>
                                                <option value="Operator" <?php $data['level'] =='Operator' ? print "selected" : ""; ?> > Operator </option>
                                                <option value="Dosen" <?php $data['level'] =='Dosen' ? print "selected" : ""; ?> > Dosen </option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="edit-user"> Submit </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
