<html>
    <head>
        <title>Discord Booster by KaeL</title>
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
        <h1 align="center">List Discord Booster</h1>

        <br/>
        <h3 align ="center">Data Customer</h3>
        <table border="1" align ="center">
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Discord ID</th>
                <th>Price</th>
                <th>Setelan</th>
            </tr>
            <?php
            include "Koneksi.php";
            $perintah="SELECT * FROM list_booster";
            $query=mysqli_query($db,$perintah) or die(mysqli_error());
            $nomor=1;

            while($data=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td>
                    <?php echo $data['username'];
                    ?>
                </td>
                <td>
                    <?php echo $data['password'];
                    ?>
                </td>
                <td>
                    <?php echo $data['discord_id'];
                    ?>
                </td>   
                <td>
                    <?php echo $data['price'];
                    ?>
                </td>
                <td>
                    <a href="EditData.php?discord_id=<?php echo$data['discord_id']; ?>">EDIT</a>
                    <a href="HapusData.php?discord_id=<?php echo$data['discord_id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
            } 
            ?>
        </table>
    </body>
</html>