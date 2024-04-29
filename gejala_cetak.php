<h1>Laporan Gejala</h1>
<table>
	<thead>
		<tr>
			<th>No</th>
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
			<td><?= ++$no ?></td>
			<td><?= $row->kode_gejala ?></td>
            <td><?= $row->nama_gejala ?></td>
            <td><?= $row->keterangan ?></td>
		</tr>
	<?php endforeach ?>
</table>