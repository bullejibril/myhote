<?php


//DB parameters

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_reservation_system_db";

//connect to server / DB

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

//check if connetion is succesful
if($conn){
    echo "Connected to database succesfully";
} else{
    echo "Error : Conection Failed";
}