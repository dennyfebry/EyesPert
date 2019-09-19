<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel Informasi Pengetahuan</h1>

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="<?php echo base_url(); ?>index.php/admin/tambah_pengetahuan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pengetahuan</a>
            <br><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Gangguan</th>
                        <th>Kode Gejala</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode Gangguan</th>
                        <th>Kode Gejala</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pengetahuan->result() as $row) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->kode_gangguan; ?></td>
                            <td><?php echo $row->kode_gejala; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>index.php/admin/ubah_pengetahuan/<?php echo $row->id; ?>" class="btn btn-warning btn-xs" style="font-size: 10px;"><i class="fa fa-edit"></i> Ubah</a>
                                <a href="#hapus_pengetahuan<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-danger btn-xs" style="font-size: 10px;"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <div id="hapus_pengetahuan<?php echo $row->id; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hapus Data Pengetahuan ?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Pilih "Ya" di bawah ini jika anda ingin menghapus data pengetahuan  <br> dengan kode gangguan <strong><?php echo $row->kode_gangguan;?> </strong> dan kode gejala <strong><?php echo $row->kode_gejala;?></strong></div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/admin/hapus_penyakit/<?php echo $row->id; ?>">Ya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>