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

        <p> Your Information </p>

            <?php
            $name = $_POST['name'];
            echo "<b>Name : </b> $name";
            echo "<br />";
            $address = $_POST['address'];
            echo "<b>Address : </b> $address";
            echo "<br />";
            $notelp = $_POST['notelp'];
            echo "<b>Telephone : </b> $notelp";
            echo "<br />";
            $email = $_POST['email'];
            echo "<b>Email : </b> $email";
            echo "<br />";
            $deliveryinstruction = $_POST['deliveryinstruction'];
                echo "<b>Delivery Instruction : </b> $deliveryinstruction";
    
            ?>




    </fieldset>
    
</body>
</html>