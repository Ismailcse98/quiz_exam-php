<?php
require_once('admin/config.php');

if(isset($_REQUEST['login'])){
    $email = $_REQUEST['email'];
    $student_id = $_REQUEST['student_id'];
    $round_no = $_REQUEST['round_no'];

    $res = "SELECT * FROM  students_list WHERE email ='$email' AND student_id ='$student_id' AND round_no ='$round_no'";
    $run = mysqli_query($link, $res);
    $data_count = mysqli_num_rows($run);
    if($data_count>0){
        setcookie('em',$email, time()+1800);
        header("Location:index.php");
    }else{
        header("Location:login.php?false");
    }
}



?>