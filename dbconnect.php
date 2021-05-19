<?php



    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    echo "<h1> <center> <font color='blue'> Conneting to databses using mysqli procedural </font> </center> </h1>";


    #1- set connection credientionals 

    define("DB_HOST","127.0.0.1");
    define("DB_USER","root");
    define("DB_PASSWORD","iti");
    define("DB_Name","opensource");
    define("DB_PORT","3306");
    try{
        #2- connect to the database using mysqli library (procedureal style)
        $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_Name,DB_PORT);

        // var_dump($conn);
        if($conn){
            echo "<h4>Connected to database </h4>";

        

        }
    }catch(Exception $e){
        echo $e;
    }