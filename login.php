<?php
require 'koneksi.php';
$email    = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tabel_users
            WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);


if (mysqli_num_rows($result) > 0) {
    header("Location: index.php");
} else {
    echo "<center><h1>Your Email or Password is Incorrect. Please Try Again.</h1>
            <button><strong><a href= 'login.html'>Login</a></strong></button></center>";
}