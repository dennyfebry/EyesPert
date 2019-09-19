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
                    <form role="form" action="<?php echo base_url(); ?>index.php/admin/simpanubah_pengetahuan" method="POST">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $pengetahuan["id"]; ?>">
                        <div class="form-group">
                            <label>Kode Gangguan</label>
                            <input type="text" class="form-control" name="kode_gangguan" value="<?php echo $pengetahuan["kode_gangguan"]; ?>" placeholder="Kode Gangguan">
                        </div>
                        <div class="form-group">
                            <label>Kode Gejala</label>
                            <input type="text" class="form-control" name="kode_gejala" value="<?php echo $pengetahuan["kode_gejala"]; ?>" placeholder="Kode Gejala">
                        </div>
                        <br>
                        <center>
                            <button type="submit" value="submit" class="btn btn-success">Simpan</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>