<div class="page-header">
    <h1>Tambah Relasi</h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="post">
            <div class="form-group">
                <label>Diagnosa <span class="text-danger">*</span></label>
                <select class="form-control" name="kode_diagnosa">
                    <option value="">&nbsp;</option>
                    <?= CF_get_diagnosa_option(set_value('kode_diagnosa')) ?>
                </select>
            </div>
            <div class="form-group">
                <label>Gejala <span class="text-danger">*</span></label>
                <select class="form-control" name="kode_gejala">
                    <option value="">&nbsp;</option>
                    <?= CF_get_gejala_option(set_value('kode_gejala')) ?>
                </select>
            </div>
            <div class="form-group">
                <label>CF <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="cf" value="<?= set_value('cf') ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=relasi"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>