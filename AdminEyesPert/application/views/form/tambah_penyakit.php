<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?= $h1 ?></h1>
<!-- DataTales-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $h6 ?></h6>
    </div>
    <div class="card-body">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>
                    <?php echo form_open("admin/tambah_penyakit", array('enctype' => 'multipart/form-data'));  ?>
                    <input type="hidden" class="form-control" name="id_gangguan" value="">
                    <div class="form-group">
                        <label>Kode Gangguan</label>
                        <input type="text" class="form-control" name="kode_gangguan" value="" placeholder="Kode Gangguan">
                    </div>
                    <div class="form-group">
                        <label>Nama Gangguan</label>
                        <input type="text" class="form-control" name="nama_gangguan" value="" placeholder="Nama Gangguan">
                    </div>
                    <div class="form-group">
                        <label>Penanganan</label>
                        <input type="text" class="form-control" name="penanganan" value="" placeholder="Penanganan">
                    </div>
                    <div class="form-group">
                        <label>Pengertian</label>
                        <input type="text" class="form-control" name="pengertian" value="" placeholder="Pengertian">
                    </div>
                    <div class="form-group">
                        <label>Tips</label>
                        <input type="text" class="form-control" name="tips" value="" placeholder="Tips">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label><br>
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