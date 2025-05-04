<?php

  if(isset($_POST['submit'])){
    //print_r($_FILES);

    $src = $_FILES['myfile']['tmp_name'];
    $ext = explode('.', $_FILES['myfile']['name']);
    $des = "upload/"."abc.".$ext[1];

    if(move_uploaded_file($src, $des)){
        echo "Success";
    }else{
        echo "Error";
    }

  }else{
    header('location: form.html');
  } 

?>