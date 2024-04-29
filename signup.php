
<div class="page-header">
    <h1>Daftar</h1>
</div>
<div class="row">
    <div class="col-md-4">
        <?php if ($_POST) include 'aksi.php'; ?>
        <form method="post">
            <div class="form-group" hidden>
                <label>Kode <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="kode" value="<?= set_value('kode_user', kode_oto('kode_user', 'tb_admin', 'U', 3)) ?>" />
            </div>
            <div class="form-group">
                <label>Nama Lengkap <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" autofocus />
            </div>
            <div class="form-group">
                <label>Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Username" name="user" autofocus />
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" />
            </div>
            <div class="form-group">
                <label>Level</label>
                <select class="form-control" name="level">
                    <option value="">&nbsp;</option>
                    <?= get_level_option('level') ?>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in"></span> Daftar</button>
            </div>
        </form>
    </div>
</div>