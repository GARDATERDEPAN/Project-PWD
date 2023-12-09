<?php
require 'koneksi.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email    = $_POST["email"];
$password = $_POST["password"];
$number   = $_POST["number"];

$query_sql = "INSERT INTO tabel_users (fullname, username, email, password, number)
            VALUES ('$fullname', '$username', '$email', '$password', '$number')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Registration Failed : " . mysqli_error($conn);
}
