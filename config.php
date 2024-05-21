<?php

$server       = getenv('DB_HOST');
$user   = getenv('DB_USERNAME');
$password   = getenv('DB_PASSWORD');
$nama_database     = getenv('DB_DATABASE');
$sslcert    = "DigiCertGlobalRootCA.crt.pem";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db)
    die("Gagal terhubung dengan database: " . mysqli_connect_error());