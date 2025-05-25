<?php
    //sleep(3);
    //$json = $_POST['json'];
    //$user = json_decode($json);
    //echo "Your username is: {$username}";
    //echo $user->username;
    $user = ['username'=> 'alamin', 'email'=>'alamin@aiub.edu', 'password'=>'123'];
    echo json_encode($user);
?>