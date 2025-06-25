<div class="main-content">
<div class="fasilitas-container">
	<table class="tabel-fasilitas">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kontak</thn>
				<th>Alamat</th>
				<th>Link Map</th>
			</tr>
		</thead>
		<tbody>
            <?php $no = 1; ?>
            <?php foreach ($fasilitasPendidikan as $fasilitas): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($fasilitas['nama']); ?></td>
                    <td><?= htmlspecialchars($fasilitas['kontak']); ?></td>
                    <td><?= htmlspecialchars($fasilitas['alamat']); ?></td>
                    <td><a href="<?= htmlspecialchars($fasilitas['link_map']); ?>" target="_blank">Lihat di Peta</a></td>
                </tr>
            <?php endforeach; ?>
		</tbody>
	</table>
</div>
</div>