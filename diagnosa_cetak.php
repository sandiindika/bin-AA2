<h1>Laporan Diagnosa</h1>
<table>
	<thead>
		<tr>
			<th>Kode</th>
			<th>Nama Diagnosa</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<?php
	$rows = $db->get_results("SELECT * FROM tb_diagnosa ORDER BY kode_diagnosa");
	foreach ($rows as $row) : ?>
		<tr>
			<td><?= $row->kode_diagnosa ?></td>
			<td><?= $row->nama_diagnosa ?></td>
			<td><?= $row->keterangan ?></td>
		</tr>
	<?php endforeach ?>
</table>