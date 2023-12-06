<html>
    <head>
        <title>Hapus Data</title>
    </head>
    <style>
            .tengah{
                position: absolute;
                margin-top: -100px;
                margin-left: -200px;
                left: 50%;
                top: 40%;
                width: 400px;
                height: 220px;
            }
            body{
                background-image: url("menkrep.jpg");
            }
            table{
                background-color: rgba(255, 255, 255, .15);  
                backdrop-filter: blur(5px);
            }
        </style>
    <body class = "tengah">
        <h3>HAPUS DATA DISCORD BOOSTER</h3>
        <?php 
        include('Koneksi.php');
        if(isset($_GET['discord_id']))
        {
            $discord_id=$_GET['discord_id'];
        }

        $perintah="SELECT * from list_booster where discord_id='$discord_id'";
        $query=mysqli_query($db,$perintah);

        while ($row=mysqli_fetch_array($query))
            {
        ?>
        <form action="Proseshapus.php" method="post">
            <table>
                    <tr>
                        <td>Username :</td>
                        <td>
                        <input type="hidden" name="discord_id" value="<?php echo$row['discord_id']?>"></input>
                        <input type="text" name="username" value="<?php echo $row['username']?>"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td>
                        <input type="text" name="password" value="<?php echo $row['password']?>"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Discord ID :</td>
                        <td>
                        <input type="text" name="discord_id" value="<?php echo $row['discord_id']?>"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Subscribe :</td>
                        <td>
                        <select name="price" value="<?php echo $row['discord_id']?>">
                        <option value="1 Month ( Rp.45,000 )">1 Month ( Rp. 45,000 )</option>
                        <option value="1 Year ( Rp.400,000 )">1 Year ( Rp.400,000 )</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        <input type="submit" value="HAPUS DATA" ></input>
                        </td>
                    </tr>
            </table>
        </form>
        <?php
            }
        ?>
    </body>
</html>