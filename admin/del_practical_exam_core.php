<?php
require_once('config.php');
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $file_one = $_REQUEST['file_one'];
        $file_two = $_REQUEST['file_two'];
        $file_three = $_REQUEST['file_three'];
        $delete_query = "DELETE FROM practical_exam WHERE id ='$id'";
        $run_query = mysqli_query($link, $delete_query);
        if($run_query){
            header('Location:practical_exam.php');
        }
    }
?>