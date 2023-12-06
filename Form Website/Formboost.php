<html>
    <head>
        <title>Form Discord Booster</title>
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
            h3{
                font-size:20pt;
                font-family:"Minecraft";
                color : "000000";
            }
            tr{
                font-family:"elephant";
                color: #DC143C;
            }
        </style>
    </head>
    <body class="tengah" >
        <h3 align="center">Form Pemesanan Discord Booster</h3>
        <form method="POST" action="Simpandata.php">
        <table align ="center">
            <tr>
                <td>Username/Email</td>
                <td>
                <input name="username" type="text">     
            </td>       
            </tr>
            <tr>
                <td>Password</td>
                <td>
                <input name="password" type="password">  
            </td>          
            </tr>
            <tr>
                <td>Discord ID</td>
                <td>
                <input name="discord_id" type="text">    
            </td>        
            </tr>
            <tr>
                <td>Pilihan Subscribe Booster</td>
                <td>
                <select name="price">
                    <option value="1 Month ( Rp.45,000 )">1 Month ( Rp.45,000 )</option>
                    <option value="1 Year ( Rp.400,000 )">1 Year ( Rp.400,000 )</option>
                </select>
                </td>            
            </tr>
            <tr>
                <td>
                <input type="submit" value="Simpan"> 
                </td>           
            </tr>
        </table>
    </form>
    </body>
    </html>