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

  function daftar($data) {
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

  function ubah ($data) {
    global $conn;
        $id = $data["id"] ;
        $nik = htmlspecialchars($data["nik"]) ;
        $namadepan = htmlspecialchars($data["namadepan"]) ;
        $namabelakang = htmlspecialchars($data["namabelakang"]) ;
        $tglahir = htmlspecialchars($data["tglahir"]) ;
        $jeniskelamin = htmlspecialchars($data["jeniskelamin"]) ;
        $alamat = htmlspecialchars($data["alamat"]) ;
        $agama = htmlspecialchars($data["agama"]) ;
        $pekerjaan = htmlspecialchars($data["pekerjaan"]) ;

$query = "UPDATE penduduk SET
              nik = '$nik',
              namadepan = '$namadepan',
              namabelakang = '$namabelakang',
              tglahir = '$tglahir',
              jeniskelamin = '$jeniskelamin',
              alamat = '$alamat',
              agama = '$agama',
              pekerjaan = '$pekerjaan'
              WHERE id = $id
";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
  }


  function cari($keyword) {
    $query = "SELECT * FROM penduduk
                   WHERE
                   nik LIKE '%$keyword%' OR
                   namadepan LIKE '%$keyword%' OR
                   namabelakang LIKE '%$keyword%' OR
                   tglahir LIKE '%$keyword%' OR
                   jeniskelamin LIKE '%$keyword%' OR
                   alamat LIKE '%$keyword%' OR
                   agama LIKE '%$keyword%' OR
                   pekerjaan LIKE '%$keyword%'
                   ";
                   return query($query);
  }

  function registrasi ($data) {
    global $conn;
    // global $user;

    $username = strtolower(stripslashes($data["username"])) ;
    $password = mysqli_real_escape_string($conn, $data["password"]) ;
    $password2 = mysqli_real_escape_string($conn, $data["password2"]) ;
    // $user = strtolower($data["user"]) ;

    // Username Check
    $result = mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '$username'");
    if(mysqli_fetch_row($result)) {
      echo "<script>
        alert('Username sudah terdaftar!');
      </script>";
      return false;
    }

    // Check Pass
    if($password !== $password2) {
      echo "<script>
        alert('Konfirmasi Password tidak sesuai!');
      </script>";
      return false;
    }
    // Encryp
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert to DB
    mysqli_query($conn, "INSERT INTO pengguna VALUES(NULL, '$username', '$password', 'role')");

    return mysqli_affected_rows($conn);
  }