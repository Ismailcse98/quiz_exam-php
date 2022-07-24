<?php
require_once('config.php');
if(isset($_REQUEST['add-student'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['stu_email'];
    $stuId = $_REQUEST['stuId'];
    $roundNo = $_REQUEST['roundNo'];
    if(empty($name) || empty($email) || empty($stuId) || empty($roundNo)){
        header('Location:index.php?false');
    }else{
        $res = "INSERT INTO students_list(name, email, student_id, round_no) VALUES ('$name','$email','$stuId','$roundNo')";
        $run = mysqli_query($link, $res);
        if($run){
            header("Location:index.php?true");
        }
    }
}
?>