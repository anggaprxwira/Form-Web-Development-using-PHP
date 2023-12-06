<html>
    <head>
        <title>Form Barang</title>
    </head>
    <body>
        <h3>Form Isian Barang</h3>
        <Form method="POST" action="SimpanData.php">
            <div>
                <label>Masukkan Kode Barang</label>
                <input name="kodebarang" type="text">            
            </div>
            <br>
            <div>
                <label>Masukkan Nama Barang</label>
                <input name="namabarang" type="text">            
            </div>
            <br>
            <div>
                <label>Masukkan Harga Barang</label>
                <input name="hargabarang" type="text">            
            </div>
            <br>
            <div>
                <label>Masukkan Jumlah Barang</label>
                <input name="jumlahbarang" type="text">            
            </div>
            <br>
            <div>
                <input type="submit" value="Simpan">            
            </div>
        </form>
    </body>
    </html>