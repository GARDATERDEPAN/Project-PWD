<?php
require 'koneksi.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email    = $_POST["email"];
$number   = $_POST["number"];
$comment  = $_POST["comment"];

$query_sql = "INSERT INTO buku_tamu (fullname, username, email, number, comment)
            VALUES ('$fullname', '$username', '$email', '$number', '$comment')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.php");
} else {
    echo "Contact Failed : " . mysqli_error($conn);
}
