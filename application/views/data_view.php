<?php include("header.php"); ?>
<div class="container">
        <!-- Main component for a primary marketing message or call to action -->
    <div class="panel panel-default">
        <div class="panel-heading">         
                      <a href="<?= site_url('AnggotaController/formTambah/') ?>" class="btn btn-sm btn-success">New Data</a>
<!--            <button class="btn btn-primary btn-success" data-toggle="modal" data-target="#myModal">
                New Data
            </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Insert New Data</h4>
                        </div>
                        <div class="modal-body">
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
                                                <input type="hidden" name="umur" id="dtp_input2" value="<?php echo $this->session->flashdata('pesan'); ?>"/>
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>-->
            <a href="#" class="btn dropdown-toggle btn-sm btn-primary" data-toggle="dropdown" role="button" aria-expanded="false">Data Grouping<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li class="dropdown-header">Group by ...</li>
                <li><a href="#">Gender</a></li>
                <li><a href="#">Tempat Lahir</a></li>
                <li><a href="#">Umur</a></li>
                <li><a href="#">Pelayanan</a></li>
                <li><a href="#">Status</a></li>
                <li><a href="#">Pekerjaan</a></li>
                <li class="divider"></li>
            </ul>
            <div class="col-md-3 pull-right">
                <form action="<?php echo site_url('AnggotaController/AnggotaSearch/') ?>" method="POST">
                    <div class="input-group">
                        Search By
                        <select name="keywordby">
                            <option value="id">ID</option>
                            <option value="nama">Nama</option>
                            <option value="alamat">Alamat</option>
                            <option value="telp">Nomor Telepon</option>
                            <option value="tempatlahir">Tempat Lahir</option>
                            <option value="status">Status</option>
                            <option value="pekerjaan">Pekerjaan</option>
                        </select>
                        <input type="text" name="keyword" class="form-control" placeholder="Keyword"/>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">cari</button>
                        </span>
                    </div>

                </form>
            </div>
            <!--            <div class="pull-right">
                            <form action="<?php echo site_url('AnggotaController/AnggotaSearch/') ?>" method="POST">
                                Search By
                                <select name="keywordby">
                                    <option value="id">ID</option>
                                    <option value="nama">Nama</option>
                                    <option value="alamat">Alamat</option>
                                    <option value="telp">Nomor Telepon</option>
                                    <option value="tempat_lahir">Tempat Lahir</option>
                                    <option value="status">Status</option>
                                    <option value="pekerjaan">Pekerjaan</option>
                                </select>
                                <input type="text" name="keyword" value="" placeholder="Keyword"/>
                                <input type="submit" class="submitLink" value="Search">
                            </form>
                        </div>-->
        </div>


        <div class="panel-body">
            <p><?= $this->session->flashdata('pesan') ?> </p> 
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>No. Telp</th>
                        <th>Gender</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Pelayanan</th>
                        <th>Status</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($Anggotadata)) { ?>
                        <tr>
                            <td colspan="6">Data tidak ditemukan</td>
                        </tr>
                        <?php
                    } else {
                        $no = 0;
                        foreach ($Anggotadata as $row) {
                            $no++;
                            ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->telp; ?></td>
                                <td><?php echo $row->gender; ?></td>
                                <td><?php echo $row->tempatlahir; ?></td>
                                <td><?php echo $row->tanggallahir; ?></td>
                                <td><?php
                                    $tanggallahir = $row->tanggallahir;
                                    $pemisah = explode('-', $tanggallahir);
                                    $tahun_lahir = $pemisah[0];
                                    $bulan_lahir = $pemisah[1];
                                    $tahun_skrg = Date('Y');
                                    $bulan_skrg = Date('m');
                                    $selisih_tahun = $tahun_skrg - $tahun_lahir;
                                    $selisih_bulan = $bulan_skrg - $bulan_lahir;
                                    echo "$selisih_tahun Tahun $selisih_bulan Bulan";
                                    ?></td>
                                <td><?php echo $row->pelayanan; ?></td>
                                <td><?php echo $row->status; ?></td>
                                <td><?php echo $row->pekerjaan; ?></td>
                                <td><?php echo $row->alamat; ?></td>
                                <td>
                                    <a href="<?php echo site_url('AnggotaController/EditData/') . '/' . $row->id; ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i>Update</a>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('AnggotaController/HapusData/') . '/' . $row->id; ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>    <!-- /panel -->

</div> <!-- /container -->
<?= $paging ?>
<?php include("footer.php"); ?>