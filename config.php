<?php

$server = getenv('DB_HOST');
$user = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$nama_database = getenv('DB_DATABASE');
$sslcert = "DigiCertGlobalRootCA.crt.pem";

$conn = mysqli_init();

// Configurar la conexión SSL
mysqli_ssl_set($conn, NULL, NULL, $sslcert, NULL, NULL);

// Intentar establecer la conexión
if (!mysqli_real_connect($conn, $server, $user, $password, $nama_database, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Si la conexión es exitosa
echo 'Successfully connected to MySQL with SSL!';
?>