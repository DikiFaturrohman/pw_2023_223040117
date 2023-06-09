<?php 
  // Connect
  $conn = mysqli_connect("localhost", "root", "", "tubes");

  function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;

  }

  function tambah($data) {
    global $conn;

        $nik = htmlspecialchars($data["nik"]) ;
        $namadepan = htmlspecialchars($data["namadepan"]) ;
        $namabelakang = htmlspecialchars($data["namabelakang"]) ;
        $tglahir = htmlspecialchars($data["tglahir"]) ;
        $jeniskelamin = htmlspecialchars($data["jeniskelamin"]) ;
        $alamat = htmlspecialchars($data["alamat"]) ;
        $agama = htmlspecialchars($data["agama"]) ;
        $pekerjaan = htmlspecialchars($data["pekerjaan"]) ;


    $query = "INSERT INTO penduduk
    VALUES
    (NULL, '$nik', '$namadepan', '$namabelakang', '$tglahir', '$jeniskelamin', '$alamat', '$agama', '$pekerjaan')
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
  }

  function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM penduduk WHERE id = $id");

    return mysqli_affected_rows($conn);
  }