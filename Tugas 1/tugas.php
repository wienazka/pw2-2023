<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $buah = array(
    array("id" => 1, "nama" => "Apel", "warna" => "Merah", "stok" => 10, "harga" => 10000,
     "deskripsi" => "Buah apel segar dengan rasa manis dan renyah."),
    array("id" => 2, "nama" => "Mangga", "warna" => "Hijau", "stok" => 7, "harga" => 15000,
     "deskripsi" => "Buah mangga segar dengan rasa manis dan harum."),
    array("id" => 3, "nama" => "Jeruk", "warna" => "Orange", "stok" => 20, "harga" => 8000,
     "deskripsi" => "Buah jeruk segar dengan rasa asam dan menyegarkan."),
    array("id" => 4, "nama" => "Pisang", "warna" => "Kuning", "stok" => 15, "harga" => 5000,
     "deskripsi" => "Buah pisang segar dengan rasa manis dan lembut."),
    array("id" => 5, "nama" => "Semangka", "warna" => "Hijau", "stok" => 8, "harga" => 25000,
     "deskripsi" => "Buah semangka segar dengan rasa manis dan segar."),
  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
    <?php
      /* Task 2
        Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
      */
      foreach ($buah as $b) {
        echo "<tr>";
        echo "<td>" . $b['id'] . "</td>";
        echo "<td>" . $b['nama'] . "</td>";
        echo "<td>" . $b['warna'] . "</td>";
        echo "<td>" . $b['stok'] . "</td>";
        echo "<td>" . $b['harga'] . "</td>";
        echo "<td>" . $b['deskripsi'] . "</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
</div>
</body>
</html>




