<?php
$terjawab = get_terjawab();
$relasi = get_relasi($terjawab);
$kode_gejala = get_next_gejala($relasi);

$success = _get('success');
$row = $db->get_row("SELECT * FROM tb_gejala WHERE kode_gejala='$kode_gejala'");

$count = $db->get_var("SELECT COUNT(*) FROM tb_konsultasi");

if (!$row) {
    $success = true;
}
?>
<div class="page-header">
    <h1>Konsultasi</h1>
</div>

<?php if ($success) : ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Riwayat Pertanyaan</h3>
        </div>
        <div class="list-group">
            <?php
            $rows = $db->get_results("SELECT * FROM tb_konsultasi k INNER JOIN tb_gejala g ON g.kode_gejala=k.kode_gejala");
            foreach ($rows as $row) : ?>
                <div class="list-group-item"><?= $row->ID ?>. Apakah <?= strtolower($row->nama_gejala) ?>? <strong><?= $row->jawaban ?></strong></div>
            <?php endforeach ?>
        </div>
    </div>
<?php include 'konsultasi_hasil.php';
else : ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Jawablah pertanyaan berikut ini [<?= $row->kode_gejala ?>]</h3>
        </div>
        <div class="panel-body">
            <h3>Apakah <?= strtolower($row->nama_gejala) ?>?</h3>
            <form action="aksi.php?m=konsultasi" method="post">
                <input type="hidden" name="kode_gejala" value="<?= $row->kode_gejala ?>" />
                <p>&nbsp;</p>
                <p>
                    <button name="yes" class="btn btn-primary" value="1">Ya</button>
                    <button name="no" class="btn btn-danger" value="1">Tidak</button>

                    <?php if ($count) : ?>
                        <a class="btn btn-success" href="?m=konsultasi&success=1">Lihat Hasil</a>
                        <a class="btn btn-primary pull-right" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-refresh"></span> Batal</a>
                    <?php endif ?>
                </p>
            </form>
        </div>
    </div>
<?php endif ?>