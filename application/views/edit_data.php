<?php include("header.php"); ?>
<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="panel panel-default">
        <div class="panel-heading"><b>Edit Data</b></div>
        <div class="panel-body">
            <form action="<?php echo site_url('AnggotaController/UpdateData/'); ?>" method="post">
                <table class="table table-striped">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $data_edit->id; ?>">
                    <tr>
                        <td>ID</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" disabled="" name="id" class="form-control" value="<?php echo $data_edit->id; ?>">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" name="nama" class="form-control" value="<?php echo $data_edit->nama; ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Telp</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" name="telp" class="form-control" value="<?php echo $data_edit->telp; ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="radio" name="gender" value="<?php echo $data_edit->gender; ?>" checked="checked"/>Laki-laki   
                                <input type="radio" name="gender" value="<?php echo $data_edit->gender; ?>" /> Perempuan
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" name="tempatlahir" class="form-control" value="<?php echo $data_edit->tempatlahir; ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <div class="col-sm-6">
                                <div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control datepicker" data-date-format="yyyy-mm-dd" type="text" placeholder="yyyy-MM-dd" name="tanggallahir" value="<?php echo $data_edit->tanggallahir; ?>">
                                </div>
                                <input type="hidden" id="dtp_input2" value=""/> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" name="status" class="form-control" value="<?php echo $data_edit->status; ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" name="pekerjaan" class="form-control" value="<?php echo $data_edit->pekerjaan; ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" name="alamat" class="form-control" value="<?php echo $data_edit->alamat; ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pelayanan</td>
                        <td>
                            <div class="col-sm-2">
                                <select name="pelayanan" value="<?php echo $data_edit->pelayanan; ?>">
                                    <option>Salatiga</option>
                                    <option>Solo</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="button" value="Browse" name="foto" /> No file selected
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Update">
                            <button type="reset" class="btn btn-default">Reset</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>    <!-- /panel -->

</div> <!-- /container -->
<?php include("datepicker.php"); ?>
<?php include("footer.php"); ?>