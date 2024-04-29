<div class="page-header">
    <h1>Rule</h1>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Rule</th>
            </tr>
        </thead>
        <?php
        $rules = get_relasi(array());
        $no = 1;
        foreach ($rules as $kode_diagnosa => $val) :
            $rule = array();
            foreach ($val as $kode_gejala => $v) {
                $rule[] = '<span class="text-danger">' . $GEJALA[$kode_gejala] . '</span>';
            }
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><strong>IF</strong> <?= implode('<br />&nbsp; &nbsp; &nbsp;<strong>AND</strong> ', $rule) ?> <br /><strong>THEN</strong> <span class="text-primary"><?= $DIAGNOSA[$kode_diagnosa]->nama_diagnosa ?></span></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>