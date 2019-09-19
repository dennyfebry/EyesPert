<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel Informasi Penyakit</h1>

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="<?php echo base_url(); ?>index.php/admin/tambah_penyakit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Penyakit</a>
            <br><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Penanganan</th>
                        <th>Pengertian</th>
                        <th>Tips</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Penanganan</th>
                        <th>Pengertian</th>
                        <th>Tips</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($penyakit->result() as $row) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->kode_gangguan; ?></td>
                            <td><?php echo $row->nama_gangguan; ?></td>
                            <td><?php echo $row->penanganan; ?></td>
                            <td><?php echo $row->pengertian; ?></td>
                            <td><?php echo $row->tips; ?></td>
                            <td><img src="<?php echo base_url("public/img/Gangguan Mata/" . $row->gambar); ?>" height="70" width="140"></td>
                            <td>
                                <a href="<?php echo base_url(); ?>index.php/admin/ubah_penyakit/<?php echo $row->id_gangguan; ?>" class="btn btn-warning btn-xs" style="font-size: 10px;"><i class="fa fa-edit"></i> Ubah</a>
                                <a href="#hapus_penyakit<?php echo $row->id_gangguan; ?>" data-toggle="modal" class="btn btn-danger btn-xs" style="font-size: 10px;"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <div id="hapus_penyakit<?php echo $row->id_gangguan; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hapus Data Penyakit ?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Pilih "Ya" di bawah ini jika anda ingin menghapus data penyakit <br> <strong><?php echo $row->nama_gangguan; ?></strong></div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/admin/hapus_penyakit/<?php echo $row->id_gangguan; ?>">Ya</a>
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