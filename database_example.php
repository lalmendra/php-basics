<?php
    $db_server = "YOUR_SERVER";
    $db_user = "YOUR_USER";
    $db_pass = "YOUR_PASSWORD";
    $db_name = "YOUR_DB_NAME";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server,
                               $db_user,
                               $db_pass,
                               $db_name);
    }
    catch(mysqli_sql_exception){
        echo"Could not connect! <br>";
    }
?>