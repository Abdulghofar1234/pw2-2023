<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>01</td>
					<td>GHofar</td>
					<td>ghofar@gmail.com</td>
					<td>Depok</td>
					<td>+62812341355</td>
				</tr>
				<tr>
					<td>02</td>
					<td>fri</td>
					<td>fri@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>
				<tr>
					<td> <?php echo $_POST['no'] ?></td>
					<td> <?php echo $_POST['nama_lengkap'] ?></td>
					<td> <?php echo $_POST['email'] ?></td>
					<td> <?php echo $_POST['alamat_lengkap'] ?></td>
					<td> <?php echo $_POST['telepon'] ?></td>
				</tr>

				<!--<?php
				  // Variable untuk menampung data
                  $nama_orang = $_POST['nama_lengkap'];
                  $email_orang = $_POST['email'];
                  $alamat_orang = $_POST['alamat_lengkap'];
                  $hp_orang = $_POST['telepon'];

                  // Menampilakan data dari variable
                    echo '<br> Nama Lengkap : ' . $nama_orang;
                    echo '<br> Email : ' . $email_orang;
                    echo '<br> Alamat Lengkap : ' . $alamat_orang;
                    echo '<br> No.Telp/Whatsapp : ' . $hp_orang;

				?>
					ditutup-->
			</tbody>
		</table>
	</div>
</body>
</html>