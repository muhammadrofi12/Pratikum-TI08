<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display:flex; justify-content:center;">
    <fieldset style="width:55%; background-color:beige;" >
        <h1 align="center">THANK YOU</h1>
        <hr color="skyblue">

        <p>Thank you for ordering form Black Goose Bistro.
            We have received the following information about your order:</p>

        <p style="color: #FF5F1F;"> Your Information </p>

        <div style="margin-left: 20px;">

            <?php
            $name=$_POST['customername'];
            $address=$_POST['address'];
            $notelp=$_POST['telephonr'];
            $email=$_POST['email'];
    
            echo "<b>Name :</b>" .$name;
            echo "<br />";
            echo "<b>Address :</b>" .$address;
            echo "<br />";
            echo "<b>Telphone :</b>" .$notelp;
            echo "<br />";
            echo "<b>Email :</b>" .$email;
            echo "<br />";
            ?>

        </div>

        <p>

            <?php
            $delivery=$_POST['instructions'];

            echo "<b>Delivery Instruction :</b>" .$delivery;
            ?>

        </p>
        
        <p style="color: #FF5F1F;"> Your Pizza </p>

        <div>

            <?php
            $crust=$_POST['crust'];
            

            echo "<b>Crust :</b>" .$crust;
        
            ?>

        </div>

        <div>
            <?php
            echo "<b>Toppings :</b>";
            $topps=$_POST['toppings'];
            for($i = 0; $i < count($topps); $i++)
            {
                echo $topps[$i] . "<br />";
            }

            /*echo "<b>Toppings :</b>" .$topps[0]; echo"<br />" .$topps[1];*/


            ?>
        </div>






    </fieldset>
    
</body>
</html>