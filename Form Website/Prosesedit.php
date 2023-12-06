<?php
    include 'Koneksi.php';
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $discord_id=$_REQUEST['discord_id'];
    $price=$_REQUEST['price'];

    $perintah = "UPDATE list_booster SET username='$username',password='$password',discord_id='$discord_id',price='$price' WHERE discord_id='$discord_id'";

    if(mysqli_query($db,$perintah)){
        echo "Data Berhasil Disimpan";
    }else{
        echo "Maaf Data Gagal Disimpan",mysqli_error($db);
    }
?>