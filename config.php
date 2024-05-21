<?php

$server       = getenv('DB_HOST');
$user   = getenv('DB_USERNAME');
$password   = getenv('DB_PASSWORD');
$nama_database     = getenv('DB_DATABASE');
$sslcert    = "DigiCertGlobalRootCA.crt.pem";

$db = mysqli_connect($server, $user, $password, $nama_database);

//Establish the connection
        $conn = mysqli_init();
        mysqli_ssl_set($conn,NULL,NULL,$sslcert,NULL,NULL);
        if(!mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, MYSQLI_CLIENT_SSL)){
            die('Failed to connect to MySQL: '.mysqli_connect_error());
        }