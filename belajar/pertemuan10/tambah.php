<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  tambah($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="username" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="username" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="username" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="username" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="username" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>