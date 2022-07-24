<?php
require_once('config.php');
if(isset($_REQUEST['update_result'])){
    $id = $_REQUEST['id'];
    $chapter = $_REQUEST['chapter'];
    $name = $_REQUEST['name'];
    $student_id = $_REQUEST['student_id'];
    $correct_ans = $_REQUEST['correct_ans'];
    $wrong_ans = $_REQUEST['wrong_ans'];
    $total_mark = $_REQUEST['total_mark'];
    if(empty($chapter) || empty($name) || empty($student_id) || empty($correct_ans) || empty($wrong_ans) || empty($total_mark)){
        header("Location:result_list_edit.php?edit_id={$id}&&false");
    }else{
        $res = "UPDATE result SET chapter = '$chapter', name='$name', student_id='$student_id', correct_ans='$correct_ans', wrong_ans='$wrong_ans', total_mark='$total_mark' WHERE id = '$id'";
        $run = mysqli_query($link, $res);
        if($run){
            header("Location:result.php");
        }
    }
}
?>