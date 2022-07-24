<?php
require_once('config.php');
    if(isset($_REQUEST['del_id'])){
        $id = $_REQUEST['del_id'];
        $delete_query = "DELETE FROM students_list WHERE id ='$id'";
        $run_query = mysqli_query($link, $delete_query);
        if($run_query){
            header('Location:all_student.php');
        }
    }
?>