<?php

    if(isset($_POST['name1']))
    {
        $server = "localhost";
        $username = "root";
        $password = "";

        $connect = mysqli_connect($server,$username,$password);

        if(!$connect)
        {
            die("Database is not connected due to ".mysqli_connect_error());
        }

        $name1 = $_POST['name1'];
        $uname1 = $_POST['uname1'];
        $email1 = $_POST['email1'];
        $promo1 = $_POST['promo1'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $dob1 = $_POST['dob1'];
        $phone1 = $_POST['phone1'];
        $gender = $_POST['gender'];
        $address1 = $_POST['address1'];
        $pin1 = $_POST['pin1'];
        $lan = $_POST['lan'];
        $type = $_POST['type'];

        $allLans = implode(",",$lan);

        $sql = "INSERT INTO `table`.`music` (`name1`, `uname1`, `email1`, `promo1`, `password1`, `password2`, `dob1`, `phone1`, `gender`, `address1`, `pin1`, `lan`, `type`, `dt`) VALUES ('$name1', '$uname1', '$email1', '$promo1', '$password1', '$password2', '$dob1', '$phone1', '$gender', '$address1', '$pin1', '$allLans', '$type', current_timestamp());";

        if($connect->query($sql) == true)
        {
            echo "Successfully inserted";
        }

        else 
        {
            echo "ERROR";
        }

        $connect->close();

    }

?>