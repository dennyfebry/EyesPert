<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel Informasi Tim Pengembang</h1>

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tabel</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="<?php echo base_url(); ?>index.php/admin/tambah_tentang" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Tim Pengembang</a>
            <br><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>SIP/NPM</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Alamat Rumah</th>
                        <th>No Telepon</th>
                        <th>Nama Instansi</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>SIP/NPM</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Alamat Rumah</th>
                        <th>No Telepon</th>
                        <th>Nama Instansi</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($tentang->result() as $row) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->nama_tentang; ?></td>
                            <td><?php echo $row->jenis_kelamin; ?></td>
                            <td><?php echo $row->pekerjaan; ?></td>
                            <td><?php echo $row->sip_npm; ?></td>
                            <td><?php echo $row->tt_lahir; ?></td>
                            <td><?php echo $row->alamat_rumah; ?></td>
                            <td><?php echo $row->no_telp; ?></td>
                            <td><?php echo $row->nama_instansi; ?></td>
                            <td><?php echo $row->foto; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>index.php/admin/ubah_tentang/<?php echo $row->id_tentang; ?>" class="btn btn-warning btn-xs" style="font-size: 10px;"><i class="fa fa-edit"></i> Ubah</a>
                                <a href="#hapus_tentang<?php echo $row->id_tentang; ?>" data-toggle="modal" class="btn btn-danger btn-xs" style="font-size: 10px;"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <div id="hapus_tentang<?php echo $row->id_tentang; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hapus Data Tim Pengembang ?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Pilih "Ya" di bawah ini jika anda ingin menghapus data tim Pengembang <br> <strong><?php echo $row->nama_tentang;?></strong></div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/admin/hapus_tentang/<?php echo $row->id_tentang; ?>">Ya</a>
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