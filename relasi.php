<div class="page-header">
    <h1>Relasi</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <form class="form-inline">
            <input type="hidden" name="m" value="relasi" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?= _get('q') ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="?m=relasi_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>Diagnosa</th>
                    <th>Gejala</th>
                    <th>CF</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $q = esc_field(_get('q'));
            $rows = $db->get_results("SELECT r.ID, r.kode_gejala, d.kode_diagnosa, r.cf, g.nama_gejala, d.nama_diagnosa 
                FROM tb_relasi r INNER JOIN tb_diagnosa d ON d.`kode_diagnosa`=r.`kode_diagnosa` INNER JOIN tb_gejala g ON g.`kode_gejala`=r.`kode_gejala`
                WHERE r.kode_gejala LIKE '%$q%'
                    OR r.kode_diagnosa LIKE '%$q%'
                    OR g.nama_gejala LIKE '%$q%'
                    OR d.nama_diagnosa LIKE '%$q%' 
                ORDER BY r.kode_diagnosa, r.kode_gejala");
            $no = 0;

            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td>[<?= $row->kode_diagnosa . '] ' . $row->nama_diagnosa ?></td>
                    <td>[<?= $row->kode_gejala . '] ' . $row->nama_gejala ?></td>
                    <td><?= $row->cf ?></td>
                    <td class="nw">
                        <a class="btn btn-xs btn-warning" href="?m=relasi_ubah&ID=<?= $row->ID ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        <a class="btn btn-xs btn-danger" href="aksi.php?act=relasi_hapus&ID=<?= $row->ID ?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>