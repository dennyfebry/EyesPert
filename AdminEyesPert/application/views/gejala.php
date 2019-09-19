<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tabel Informasi Gejala</h1>

<!-- DataTales -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Tabel</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <a href="<?php echo base_url(); ?>index.php/admin/tambah_gejala" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gejala</a>
      <br><br>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Nilai Belief</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Nilai Belief</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $no = 1;
          foreach ($gejala->result() as $row) {
            ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $row->kode_gejala; ?></td>
              <td><?php echo $row->nama_gejala; ?></td>
              <td><?php echo $row->belief; ?></td>
              <td>
                <a href="<?php echo base_url(); ?>index.php/admin/ubah_gejala/<?php echo $row->id_gejala; ?>" class="btn btn-warning btn-xs" style="font-size: 10px;"><i class="fa fa-edit"></i> Ubah</a>
                <a href="#hapus_gejala<?php echo $row->id_gejala; ?>" data-toggle="modal" class="btn btn-danger btn-xs" style="font-size: 10px;"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
            <div id="hapus_gejala<?php echo $row->id_gejala; ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Gejala ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">Pilih "Ya" di bawah ini jika anda ingin menghapus data gejala <br> <strong><?php echo $row->nama_gejala;?></strong></div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/admin/hapus_gejala/<?php echo $row->id_gejala; ?>">Ya</a>
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