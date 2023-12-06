<?php

    $server = "localhost";
    $user = "owner";
    $password = "";
    $nama_database = "db_boosterdiscord";

    $db = mysqli_connect($server, $user, $password, $nama_database);

    if(!$db)
    {
        die("Gagal terhubung dengan database : " . mysqli_connect_error());
    }

?>