<?php

function koneksi()
{
  // koneksi ke DB & pilih databasenya
  return mysqli_connect('localhost', 'root', '', 'pw_08072220');
}

function query($query)
{
  $conn = koneksi();

  // query
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data.
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // ubah data ke dalam array
  // $row = mysqli_fetch_row($result); // array numerik
  // $row = mysqli_fetch_assoc($result); // array associative. biasanya pake yg ini
  // $row = mysqli_fetch_array($result); // keduanya
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO mahasiswa VALUES ('null', '$nama', '$nrp', '$email', '$jurusan', '$gambar');
  ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
