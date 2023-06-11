<?php 
  // Connect
  $conn = mysqli_connect("localhost", "root", "", "pw2023_223040117");

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

        $nim = htmlspecialchars($data["nim"]) ;
        $nama = htmlspecialchars($data["nama"]) ;
        $email = htmlspecialchars($data["email"]) ;
        $jurusan = htmlspecialchars($data["jurusan"]) ;


    $query = "INSERT INTO mahasiswa
    VALUES
    (NULL, '$nim', '$nama', '$email', '$jurusan')
    ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
  }

  function hapus ($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
  }