<?php

    $server = "localhost";
    $user = "kasir";
    $password = "";
    $nama_database = "db_toko";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if(!$db)
    {
        die("Gagal terhubung dengan database : " . mysqli_connect_error());
    }

?>