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
                    <form role="form" action="<?php echo base_url(); ?>index.php/admin/simpan_tentang" method="POST">
                        <input type="hidden" class="form-control" name="id_tentang" value="">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_tentang" value="" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label> <br>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki <br>
                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" value="" placeholder="Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label>SIP/NPM</label>
                            <input type="text" class="form-control" name="sip_npm" value="" placeholder="SIP/NPM">
                        </div>
                        <div class="form-group">
                            <label>Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tt_lahir" value="" placeholder="Tempat, Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label>Alamat Rumah</label>
                            <input type="text" class="form-control" name="alamat_rumah" value="" placeholder="Alamat Rumah">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telp" value="" placeholder="Nomor Telepon">
                        </div>
                        <div class="form-group">
                            <label>Nama Instansi</label>
                            <input type="text" class="form-control" name="nama_instansi" value="" placeholder="Nama Instansi">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="text" class="form-control" name="foto" value="" placeholder="Foto">
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