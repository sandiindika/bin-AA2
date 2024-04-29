<h1>Laporan Daftar Pengguna</h1>
<table>
	<thead>
		<tr>
			<th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>User</th>
            <th>Level</th>
		</tr>
	</thead>
	<?php
	
	$rows = $db->get_results("SELECT * FROM tb_admin ORDER BY kode_user");
    $no = 0;
	foreach ($rows as $row) : ?>
		<tr>
			<td><?= ++$no ?></td>
            <td><?= $row->kode_user ?></td>
            <td><?= $row->nama_user ?></td>
            <td><?= $row->user ?></td>
            <td><?= $row->level ?></td>
		</tr>
	<?php endforeach ?>
</table>