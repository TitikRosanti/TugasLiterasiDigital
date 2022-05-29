<div id="content">
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary">Data Kriteria</h6>
            </div>
            &nbsp;
            <div class="col-auto">
            <?= $this->session->flashdata('message'); ?>
                <a href="" class="btn btn-dark btn-flat" data-toggle="modal" data-target="#myModal">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Data Kriteria
                    </span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kriteria</th>
                                <th>Nama Kriteria</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $d) :
                            ?>
                                <tr>
                                    <th><?php echo $no++; ?></th>
                                    <th><?php echo $d['kode_kriteria'] ?></th>
                                    <th><?php echo $d['nama_kriteria'] ?></th>
                                    <td>
                                        <a class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?= $d['kode_kriteria'] ?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-pen"></i>
                                            </span>
                                        </a>
                                        <a class="btn btn-danger btn-icon-split"
                                           href=""
                                           onclick="confirm_modal('<?= base_url('Data_Kriteria/hapus/') . $d['kode_kriteria'] ?>')"
                                           data-toggle="modal"
                                           data-target="#ModalHapus">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbdoy>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- pop up tambah data kriteria -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="m-0 font-weight-bold text-gray-dark">Tambah Data Kriteria</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url() . 'Data_Kriteria/simpan' ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">
                            <b>Kode Kriteria</b>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="xid" class="form-control" id="inputUserName" placeholder="Kode Kriteria" value="<?php echo $kriteria;?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">
                            <b>Nama Kriteria</b>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Masukkan Nama Kriteria" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info btn-flat" id="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php foreach ($data as $d) : ?>
<div class="modal fade" id="ModalEdit<?= $d['kode_kriteria'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="m-0 font-weight-bold text-gray-dark">Edit Data Kriteria</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url() . 'Data_Kriteria/edit/' . $d['kode_kriteria'] ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">
                            <b>Kode Kriteria</b>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="xid" value="<?php echo $d['kode_kriteria'] ?>" class="form-control" id="inputUserName" placeholder="Kode Kriteria" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputUserName" class="col-sm-4 control-label">
                            <b>Nama Kriteria</b>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="xnama" value="<?php echo $d['nama_kriteria'] ?>" class="form-control" id="inputUserName" placeholder="Nama kriteria" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info btn-flat" id="simpan">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="m-0 font-weight-bold text-gray-dark">Hapus Data Kriteria</h4>
            </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin mau menghapus Data Kriteria?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-flat" data-dismiss="modal">Close</button>
                    <a class="btn btn-info btn-flat" type="button" id="delete_link" href="">Hapus</a>
                </div>
        </div>
    </div>
</div>
<script type="text/javascript">
      function confirm_modal(delete_url) {
          console.log('delete_url');
        $('#ModalHapus').modal('show', {
          backdrop: 'static'
        });
        document.getElementById('delete_link').setAttribute('href', delete_url);
      }
    </script>