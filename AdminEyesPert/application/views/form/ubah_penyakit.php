<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?= $h1 ?></h1>
<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $h6 ?></h6>
    </div>
    <div class="card-body">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>
                    <?php echo form_open("admin/ubah_penyakit", array('enctype' => 'multipart/form-data'));  ?>
                    <input type="hidden" class="form-control" name="id_gangguan" value="<?php echo $penyakit["id_gangguan"]; ?>">
                    <div class="form-group">
                        <label>Kode Gangguan</label>
                        <input type="text" class="form-control" name="kode_gangguan" value="<?php echo $penyakit["kode_gangguan"]; ?>" placeholder="Kode Gangguan">
                    </div>
                    <div class="form-group">
                        <label>Nama Gangguan</label>
                        <input type="text" class="form-control" name="nama_gangguan" value="<?php echo $penyakit["nama_gangguan"]; ?>" placeholder="Nama Gangguan">
                    </div>
                    <div class="form-group">
                        <label>Penanganan</label>
                        <input type="text" class="form-control" name="penanganan" value="<?php echo $penyakit["penanganan"]; ?>" placeholder="Penanganan">
                    </div>
                    <div class="form-group">
                        <label>Pengertian</label>
                        <input type="text" class="form-control" name="pengertian" value="<?php echo $penyakit["pengertian"]; ?>" placeholder="Pengertian">
                    </div>
                    <div class="form-group">
                        <label>Tips</label>
                        <input type="text" class="form-control" name="tips" value="<?php echo $penyakit["tips"]; ?>" placeholder="Tips">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label><br>
                        <img src="<?php echo base_url("public/img/Gangguan Mata/" . $penyakit["gambar"]); ?>" height="70" width="140"><br>
                        <input type="file" name="gambar">
                    </div>
                    <br>
                    <center>
                        <button type="submit" name="submit" value="Simpan" class="btn btn-success">Simpan</button>
                    </center>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>