<div class="page-header">
    <h1>Daftar Pengguna</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <form class="form-inline">
            <input type="hidden" name="m" value="user" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?= _get('q') ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="cetak.php?m=user" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak</a>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped m-0">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>User</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $q = esc_field(_get('q'));

            $rows = $db->get_results("SELECT * FROM tb_admin WHERE nama_user LIKE '%$q%' ORDER BY kode_user");
            $no = 0;

            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $row->kode_user ?></td>
                    <td><?= $row->nama_user ?></td>
                    <td><?= $row->user ?></td>
                    <td><?= $row->level ?></td>
                    <td class="nw">
                        <a class="btn btn-sm btn-danger" href="aksi.php?act=user_hapus&ID=<?= $row->kode_user ?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>