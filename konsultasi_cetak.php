<h1>Hasil Diagnosa</h1>
<?php

#$gejala = $_SESSION['gejala'];
$rows = $db->get_results("SELECT * FROM tb_gejala WHERE kode_gejala IN (SELECT kode_gejala FROM tb_konsultasi WHERE jawaban='Ya')");
?>
<h3>Gejala Terpilih</h3>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Gejala</th>
        </tr>
    </thead>
    <?php
    $no = 1;
    foreach ($rows as $row) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->nama_gejala ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
$rows = $db->get_results("SELECT * 
    FROM tb_relasi r INNER JOIN tb_diagnosa d ON d.kode_diagnosa = r.kode_diagnosa      
    WHERE r.kode_gejala IN (SELECT kode_gejala FROM tb_konsultasi WHERE jawaban='Ya') ORDER BY r.kode_diagnosa, r.kode_gejala");
$diagnosa = array();
foreach ($rows as $row) {
    if (!isset($diagnosa[$row->kode_diagnosa]['cf']))
        $diagnosa[$row->kode_diagnosa]['cf'] = 0;
    $diagnosa[$row->kode_diagnosa]['cf'] = $diagnosa[$row->kode_diagnosa]['cf'] + $row->cf * (1 - $diagnosa[$row->kode_diagnosa]['cf']);
}
?>
<h3>Hasil Analisa</h3>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Diagnosa</th>
            <th>Kepercayaan</th>
        </tr>
    </thead>
    <?php
    $no = 1;
    function ranking($array)
    {
        $new_arr = array();
        foreach ($array as $key => $value) {
            $new_arr[$key] = $value['cf'];
        }
        arsort($new_arr);

        $result = array();
        $no = 0;
        foreach ($new_arr as $key => $value) {
            $result[$key] = ++$no;
        }
        return $result;
    }

    $rank = ranking($diagnosa);

    foreach ($rank as $key => $value) : ?>
        <tr class="<?= ($value == 1) ? 'text-primary' : '' ?>">
            <td><?= $no++ ?></td>
            <td><?= $DIAGNOSA[$key]->nama_diagnosa ?></td>
            <td><?= round($diagnosa[$key]['cf'] * 100, 2) ?>%</td>
        </tr>
    <?php endforeach;
    reset($rank);
    ?>
</table>

<table>
    <tr>
        <td>Diagnosa</td>
        <td><?= $DIAGNOSA[key($rank)]->nama_diagnosa ?></td>
    </tr>
    <tr>
        <td>Solusi</td>
        <td><?= $DIAGNOSA[key($rank)]->keterangan ?></td>
    </tr>
</table>