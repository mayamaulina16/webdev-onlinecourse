<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdev";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("Gagal Koneksi: ".mysqli_connect_error());
}
