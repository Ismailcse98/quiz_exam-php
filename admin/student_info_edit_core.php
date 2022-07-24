<?php
require_once('config.php');
if(isset($_REQUEST['update_student'])){
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['stu_email'];
    $stuId = $_REQUEST['stuId'];
    $roundNo = $_REQUEST['roundNo'];
    if(empty($name) || empty($email) || empty($stuId) || empty($roundNo)){
        header('Location:index.php?false');
    }else{
        $res = "UPDATE students_list SET name = '$name', email='$email', student_id='$stuId', round_no='$roundNo' WHERE id = '$id'";
        $run = mysqli_query($link, $res);
        if($run){
            header("Location:all_student.php");
        }
    }
}
?>