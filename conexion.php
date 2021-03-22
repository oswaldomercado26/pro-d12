<?php
$servername= "localhost";
        $username = "root";
        $password = "";
        $db = "php-d12";

        try{
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        //set the PDO error node to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Conecction failed: ". $e->getMessage();
        }
?>