<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if($conn){
        echo "Connection Successfull!!";
    }
    else{
        die("Connection failed". mysqli_connect_error());
    }

    
?>