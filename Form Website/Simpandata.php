<?php

    include "Koneksi.php";

    if(isset($_POST['discord_id'])){

        $username=$_POST['username'];
        $password=$_POST['password'];
        $discord_id=$_POST['discord_id'];
        $price=$_POST['price'];
    }
    else{
        header("location:Formboost.php");
    }
    if(empty($username)){
        die("Kode Barang harus diisi");
    }
    if(empty($password)){
        die("Nama Barang harus diisi");
    }
    if(empty($discord_id)){
        die("Jumlah Barang harus diisi");
    }
    $perintah="insert into list_booster values ('$username','$password','$discord_id','$price')";
    mysqli_query($db,$perintah);
    //die("Data berhasil disimpan");

?>