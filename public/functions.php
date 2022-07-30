<?php

require('connect.php');

// Ambil data
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data){
    global $conn;

    $firstname = htmlspecialchars($data['first-name']);
    $lastname = htmlspecialchars($data['last-name']);
    $email = strtolower(stripslashes($data['email']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['confirm-password']);

    // cek email udah ada sebelumnya atau belom
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email='$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username yang dipilih sudah terdaftar sebelumnya');
              </script>";
        return false;
    }

    // cek konfirmasi password
    if($password !== $password2){
        echo "<script>
                alert('tidak sesuai');
              </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$firstname', '$lastname', '$email', '$password')");
    return mysqli_affected_rows($conn);
}

?>