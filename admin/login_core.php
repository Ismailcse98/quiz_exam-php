<?php
require_once('config.php');

if(isset($_REQUEST['login'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $res = "SELECT * FROM admin_login WHERE email ='$email' AND password ='$password'";
    $result = mysqli_query($link, $res);
    $data_count = mysqli_num_rows($result);
    if($data_count>0){
        setcookie('email',$email, time()+10000);
        header("Location:index.php");
    }else{
        header("Location:login.php?false");
    }
}



?>