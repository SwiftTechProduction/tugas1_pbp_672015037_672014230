<?php include("header.php"); ?>
<div class="modal-dialog">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="panel panel-default">

        <div class="panel-heading"><b>Insert New Data</b></div>
        <div class="panel-body">
            <form action="<?php echo site_url('AnggotaController/InsertData/'); ?>" method="post">
                <table class="table table-striped">
                    <tr>
                        <td>Nama</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Nama"  name="nama" class="form-control" required="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Telp</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Telepon"  name="telp" class="form-control" required="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="radio" name="gender" value="Laki-laki" checked="checked"/>Laki-laki   
                                <input type="radio" name="gender" value="Perempuan" /> Perempuan
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Tempat Lahir"  name="tempatlahir" class="form-control" required="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <div class="col-sm-6" >
                                <div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control datepicker" data-date-format="yyyy-mm-dd" type="text" placeholder="yyyy-MM-dd" name="tanggallahir" required="">
                                </div>
                                <?php
                                if ($this->session->flashdata('pesan') != '') {
                                    ;
                                    ?>
                                    <?php echo $this->session->flashdata('pesan'); ?>
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Status"  name="status" class="form-control" required="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Pekerjaan"  name="pekerjaan" class="form-control" required="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Alamat tempat tinggal"  name="alamat" class="form-control" required="">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pelayanan</td>
                        <td>
                            <div class="col-sm-2">
                                <select name="pelayanan">
                                    <option>Salatiga</option>
                                    <option>Solo</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Tambah baru"  name="tambahpelayanan" class="form-control">
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
                            <input type="submit" class="btn btn-success" value="Insert">
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