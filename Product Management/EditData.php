<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <h3>EDIT DATA BARANG</h3>
        <?php
            include 'Koneksi.php';
            if(isset($_GET['kodebarang'])){
                $kodebarang=$_GET['kodebarang'];
            }

            $perintah="SELECT * from tbl_barang where kodebarang='$kodebarang'";
            $query=mysqli_query($db,$perintah);

            while ($row=mysqli_fetch_array($query))
            {
        ?>      <form action="prosesedit.php" method="POST">
                    <table>
                        <tr>
                            <td>Nama Barang :</td>
                            <td>
                            <input type="hidden" name="kodebarang" value="<?php echo$row['kodebarang']?>"></input>
                            <input type="text" name="namabarang" value="<?php echo $row['namabarang']?>"></input>
                            </td>
                        </tr>
                        <tr>
                            <td>Harga Barang :</td>
                            <td>
                            <input type="text" name="hargabarang" value="<?php echo $row['hargabarang']?>"></input>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Barang :</td>
                            <td>
                            <input type="text" name="jumlahbarang" value="<?php echo $row['jumlahbarang']?>"></input>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                            <input type="submit" name="SIMPAN"></input>
                            </td>
                        </tr>
                    </table>
            </from>
        <?php
            }
        ?>
    </body>
</html>