<?php
     include 'Koneksi.php';
     
    $kodebarang=$_REQUEST['kodebarang'];

    $perintah="DELETE FROM tbl_barang WHERE kode_barang='$kodebarang'";

    if(mysqli_query($db,$perintah))
    {
        echo "Selamat Data Berhasil Di Hapus";
    }else{
        echo "Maaf Data Gagal di Hapus" . mysqli_error($db);
    }
?>