<?php
    include 'Koneksi.php';
    $kodebarang=$_REQUEST['kodebarang'];
    $namabarang=$_REQUEST['namabarang'];
    $hargabarang=$_REQUEST['hargabarang'];
    $jumlahbarang=$_REQUEST['jumlahbarang'];

    $perintah = "UPDATE tbl_barang SET namabarang='$namabarang',hargabarang='$hargabarang',jumlahbarang='$jumlahbarang' WHERE kodebarang='$kodebarang'";

    if(mysqli_query($db,$perintah)){
        echo "Data Berhasil Disimpan";
    }else{
        echo "Maaf Data Gagal Disimpan",mysqli_error($db);
    }
?>