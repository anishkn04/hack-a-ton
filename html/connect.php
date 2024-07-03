<?php

    $env = parse_ini_file('./.env');

    $servername = $env["SERVER"];
    $username = $env["USERNAME"];
    $pass = $env["PASSWORD"];
    $dbname = $env["DBNAME"];

    try{
        $connection = new mysqli($servername, $username, $pass, $dbname);

        // $sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS $dbname";

        // if($connection->query($sqlCreateDatabase) === FALSE){
        //     die("Error creating database: ".$connection->error);
        // }else {
        //     echo "Database created successfully or already exists.";
        // }
        if(!$connection){
            echo "can't connect";
        }else{
            echo "sucess";
        }

    }catch (Exception $e) {
        echo "<script> alert($e) </script>";
    }

?>