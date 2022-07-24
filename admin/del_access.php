<?php
require_once('config.php');
    if(isset($_REQUEST['del_id'])){
        $id = $_REQUEST['del_id'];
        $delete_query = "DELETE FROM ms_access_16 WHERE id ='$id'";
        $run_query = mysqli_query($link, $delete_query);
        if($run_query){
            header('Location:add_question.php?id=6');
        }
    }
?>