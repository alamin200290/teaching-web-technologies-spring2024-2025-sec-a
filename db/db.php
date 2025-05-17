<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    //$sql = "select * from users";
    //$result = mysqli_query($con, $sql);
    //$row = mysqli_fetch_assoc($result);
    //print_r($row);
    //print_r($result);

    // for($i=0; $i<mysqli_num_rows($result); $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }

    // while($row = mysqli_fetch_assoc($result)){
    //     print_r($row);
    //     echo "<br>";
    // }

    $sql = "insert into users values(null, 'TEST', 'test', 'test@gemail.com')";
    if(mysqli_query($con, $sql)){
        echo "success!";
    }else{
        echo "DB error";
    }
?>