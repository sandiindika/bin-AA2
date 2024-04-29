<div class="page-header">
    <h1>Gejala</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <form class="form-inline">
            <input type="hidden" name="m" value="gejala" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?= _get('q') ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Gejala</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <?php
            $q = esc_field(_get('q'));
            $rows = $db->get_results("SELECT * FROM tb_gejala 
            WHERE kode_gejala LIKE '%$q%' OR nama_gejala LIKE '%$q%' OR keterangan LIKE '%$q%' 
            ORDER BY kode_gejala");
            $no = 0;
            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $row->kode_gejala ?></td>
                    <td><?= $row->nama_gejala ?></td>
                    <td><?= $row->keterangan ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>