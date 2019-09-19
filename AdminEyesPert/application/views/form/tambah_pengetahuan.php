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
                    <form role="form" action="<?php echo base_url(); ?>index.php/admin/simpan_pengetahuan" method="POST">
                        <input type="hidden" class="form-control" name="id" value="">
                        <div class="form-group">
                            <label>Kode Gangguan</label><br>
                            <select name="kode_gangguan" class="form-control">
                                <option value="">---Pilih Kode Gangguan---</option>
                                <?php
                                foreach ($penyakit->result() as $row) {
                                    ?>
                                    <option value="<?php echo $row->kode_gangguan; ?>"><?php echo $row->kode_gangguan . " - " . $row->nama_gangguan; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kode Gejala</label><br>
                            <select name="kode_gejala" class="form-control">
                                <option value="">---Pilih Kode Gejala---</option>
                                <?php
                                foreach ($gejala->result() as $row) {
                                    ?>
                                    <option value="<?php echo $row->kode_gejala; ?>"><?php echo $row->kode_gejala . " - " . $row->nama_gejala; ?></option>
                                <?php
                                }
                                ?>
                            </select>
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