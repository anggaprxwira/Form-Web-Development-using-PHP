<html>
    <head>
        <title>Menampilkan Data</title>
    </head>
    <body>
        <h1>Membuat CRUD dengan PHP dan MYSQL</h1>
        <h2>Menampilkan Data</h2>

        <br/>
        <br/>
        <h3>Data Barang</h3>
        <table border="1">
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Jumlah Barang</th>
            </tr>
            <?php
            include "Koneksi.php";
            $perintah="SELECT * FROM tbl_barang";
            $query=mysqli_query($db,$perintah) or die(mysqli_error());
            $nomor=1;

            while($data=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td>
                    <?php
                    echo $nomor=$nomor+1;
                    ?>
                </td>
                <td>
                    <?php echo $data['kodebarang'];
                    ?>
                </td>
                <td>
                    <?php echo $data['namabarang'];
                    ?>
                </td>
                <td>
                    <?php echo $data['hargabarang'];
                    ?>
                </td>
                <td>
                    <?php echo $data['jumlahbarang'];
                    ?>
                </td>
                <td>
                    <a href="EditData.php?kodebarang=<?php echo$data['kodebarang']; ?>">EDIT</a>
                    <a href="HapusData.php?kodebarang=<?php echo$data['kodebarang']; ?>">Hapus</a>
                </td>
            </tr>
            <?php 
            } 
            ?>
        </table>
    </body>
</html>