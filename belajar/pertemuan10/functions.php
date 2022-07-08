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
