<?php

    //print_r($_GET);
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null data found!";
    }else if($username == $password){
        echo "Valid user!";
    }else{
        echo "invalid user";
    }


    // $_POST
    // $_REQUEST

?>