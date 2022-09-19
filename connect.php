<?php

    $username = "root";
    $password = "";
    $servername = "localhost";
    $dbname = "exam";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connect failed :" . mysqli_connect_error());
    }
    // else{
    //     echo "Successful";
    // }

?>