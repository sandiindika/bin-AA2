<div class="page-header">
    <h1>Diagnosa</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <form class="form-inline">
            <input type="hidden" name="m" value="diagnosa" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?= _get('q') ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="?m=diagnosa_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="cetak.php?m=diagnosa" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak</a>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Diagnosa</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $q = esc_field(_get('q'));
            $rows = $db->get_results("SELECT * FROM tb_diagnosa 
                WHERE kode_diagnosa LIKE '%$q%' OR nama_diagnosa LIKE '%$q%' OR keterangan LIKE '%$q%' 
                ORDER BY kode_diagnosa");
            $no = 0;
            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $row->kode_diagnosa ?></td>
                    <td><?= $row->nama_diagnosa ?></td>
                    <td><?= $row->keterangan ?></td>
                    <td class="nw">
                        <a class="btn btn-xs btn-warning" href="?m=diagnosa_ubah&ID=<?= $row->kode_diagnosa ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        <a class="btn btn-xs btn-danger" href="aksi.php?act=diagnosa_hapus&ID=<?= $row->kode_diagnosa ?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>