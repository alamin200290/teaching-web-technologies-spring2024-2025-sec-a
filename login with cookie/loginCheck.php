<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if($username == "" || $password == ""){
            echo "null username/password!";
        }else if($username == $password){
            //$_SESSION['status'] = true;

            setcookie('status', 'true', time()+3000, '/');
            header('location: home.php');
            //echo "valid user!";
        }else{
            echo "invalid user!";
        }
    }else{
        echo "Invalid request! Please submit form!";
    }
?>