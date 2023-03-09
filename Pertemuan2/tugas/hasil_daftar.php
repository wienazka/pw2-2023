<!DOCTYPE html>
<html>
<head>
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
                    <td>1</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<?php
                /* Task 2
                    Tangkap dan tampilkan data dari form_daftar.
                        Berikan error handling
                */
                $nama_lengkap = '';
                $email = '';
                $alamat = '';
                $telepon = '';
                $errors = array();

                // cek apakah form telah disubmit
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // tangkap nilai dari form
                    $nama_lengkap = trim($_POST['nama_lengkap']);
                    $email = trim($_POST['email']);
                    $alamat = trim($_POST['alamat']);
                    $telepon = trim($_POST['telepon']);

                    // validasi data form
                    if (empty($nama_lengkap)) {
                    $errors[] = 'Nama lengkap harus diisi';
                    }

                    if (empty($email)) {
                    $errors[] = 'Email harus diisi';
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = 'Format email tidak valid';
                    }

                    if (empty($alamat)) {
                    $errors[] = 'Alamat harus diisi';
                    }

                    if (empty($telepon)) {
                    $errors[] = 'Telepon harus diisi';
                    }

                    // tampilkan data jika tidak ada error
                    if (empty($errors)) {
                    echo '<tr>';
                    echo '<td>2</td>';
                    echo '<td>' . htmlspecialchars($nama_lengkap) . '</td>';
                    echo '<td>' . htmlspecialchars($email) . '</td>';
                    echo '<td>' . htmlspecialchars($alamat) . '</td>';
                    echo '<td>' . htmlspecialchars($telepon) . '</td>';
                    echo '</tr>';
                    }
                }
                ?>

			</tbody>
		</table>
	</div>
</body>
</html>