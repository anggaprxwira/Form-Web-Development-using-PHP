<?php
     include 'Koneksi.php';
     
    $discord_id=$_REQUEST['discord_id'];

    $perintah="DELETE FROM list_booster WHERE discord_id='$discord_id'";

    if(mysqli_query($db,$perintah))
    {
        echo "Selamat Data Berhasil Di Hapus";
    }else{
        echo "Maaf Data Gagal di Hapus" . mysqli_error($db);
    }
?>