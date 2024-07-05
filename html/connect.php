<?php

    $env = parse_ini_file('./.env');

    $servername = $env["SERVER"];
    $username = $env["USERNAME"];
    $pass = $env["PASSWORD"];
    $dbname = $env["DBNAME"];

    try{
        $connection = new mysqli($servername, $username, $pass, $dbname);

        // $sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS $dbname";

        if(!$connection){
            die("Error creating database: ".$connection->error);
        }else {
            echo "Database connected successfully";
        }
    

    }catch (Exception $e) {
        echo "<script> alert($e) </script>";
    }

