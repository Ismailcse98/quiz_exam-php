<?php
require_once('config.php');
    if(isset($_REQUEST['del_id'])){
        $id = $_REQUEST['del_id'];
        $delete_query = "DELETE FROM result WHERE id ='$id'";
        $run_query = mysqli_query($link, $delete_query);
        if($run_query){
            header('Location:result.php');
        }
    }
?>