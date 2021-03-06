<html>

<head>
	<title>Laporan Simpanan</title>
	<style>
		body {
			font-family: sans-serif;
			font-size: 10pt;
		}

		p {
			margin: 0pt;
		}

		table.items {
			border: 0.1mm solid #000000;
		}

		td {
			vertical-align: top;
		}

		tr:nth-child(even){
			background-color:#ddd;
		}

		.items td {
			border-left: 0.1mm solid #000000;
			border-right: 0.1mm solid #000000;
		}

		table thead td {
			background-color: #4F8DF5;
			text-align: center;
			border: 0.1mm solid #000000;
			font-variant: small-caps;
		}

	</style>
</head>

<body>
	<table width="100%" style="font-family: serif;" cellpadding="10">
		<tr>
			<td width="10%" style="border: 0mm solid #888888; ">
				<img src="https://pbs.twimg.com/media/DGRfobjUIAEjtPx.jpg" width="100" height="100" alt="">
			</td>
			<td width="90%" style="border: 0mm solid #888888; text-align: right;">
				<h2>KSP. KOPDIT SWASTISARI CABANG KUPANG KOTA</h2>
				<h3>Badan Hukum Nomor 605/BH/XIV/1990</h3>
				<h3>Jl. Perintis Kemerdekaan Walikota Kupang</h3><br>
				<h4>Email : kspswastisari@gmail.com No.HP : 082145595764</h4>
			</td>
		</tr>
	</table>
	<hr>
	<div class="" style="text-align: center; font-family: serif;">
	<h1>Laporan Simpanan Anggota</h1>
	</div>
	<div style="text-align: left; font-family: serif;">Tanggal Cetak: <?= date('d F Y');?> </div><br>
	<table class="items" width="100%" style="font-size: 9pt; font-family: serif; border-collapse: collapse; " cellpadding="8">
		<thead>
			<tr>
				<td width="10%">No</td>
				<td width="10%">BA</td>
				<td width="25%">Nama</td>
				<td width="10%">Saldo</td>
			</tr>
		</thead>
		<tbody>
			<!-- ITEMS HERE -->
			<?php $i = 1; ?>
			<?php foreach ($simpanan as $simp) : ?>
			<tr>
				<th scope="row"><?= $i; ?></th>
				<td><?= $simp['no_buku'] ?></td>
				<td><?= $simp['nm_anggota'] ?></td>
				<td><?= 'Rp.'.number_format($simp['saldo'],2,'.',','); ?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>

</html>
