<?php
require_once('config.php');
if(isset($_REQUEST['add-chapter'])){
    $chapter_name = $_REQUEST['chapter_name'];
    $mark = $_REQUEST['mark'];
    $time = $_REQUEST['time'];
    if(empty($chapter_name) || empty($mark) || empty($time)){
        header('Location:add_chapter.php?false');
    }else{
        $res = "INSERT INTO chapter_list(chapter_name, mark, time) VALUES ('$chapter_name','$mark','$time')";
        $run = mysqli_query($link, $res);
        if($run){
            header("Location:add_chapter.php?true");
        }
    }
}
?>