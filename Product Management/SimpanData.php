<?php

    include "Koneksi.php";

    if(isset($_POST['kodebarang'])){

        $kodebarang=$_POST['kodebarang'];
        $namabarang=$_POST['namabarang'];
        $hargabarang=$_POST['hargabarang'];
        $jumlahbarang=$_POST['jumlahbarang'];
    }
    else{
        header("location:FormBarang.php");
    }
    if(empty($kodebarang)){
        die("Kode Barang harus diisi");
    }
    if(empty($namabarang)){
        die("Nama Barang harus diisi");
    }
    if(empty($jumlahbarang)){
        die("Jumlah Barang harus diisi");
    }
    if(empty($hargabarang)){
        die("Harga Barang harus diisi");
    }
    if(!is_numeric($jumlahbarang)){
        die("Harga Barang harus diisi dengan angka");
    }

    $perintah="insert into tbl_barang values ('$kodebarang','$namabarang','$hargabarang','$jumlahbarang')";
    mysqli_query($db,$perintah);
    //die("Data berhasil disimpan");

?>