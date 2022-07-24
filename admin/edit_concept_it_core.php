<?php
require_once('config.php');
// concepts of IT 
    if(isset($_REQUEST['edit_concept_it'])){
        $id = $_REQUEST['id'];
        $question = $_REQUEST['question'];
        $option1 = $_REQUEST['option1'];
        $option2 = $_REQUEST['option2'];
        $option3 = $_REQUEST['option3'];
        $option4 = $_REQUEST['option4'];
        $answer = $_REQUEST['answer'];
        if(empty($question) || empty($option1) || empty($option2) || empty($option3)|| empty($option4) || empty($answer)){
            header("Location:edit_concept_it.php?edit_id={$id}&&false");
        }else{
            $res = "UPDATE concepts_of_it SET question = '$question', option1='$option1', option2='$option2', option3='$option3', option4='$option4', answer='$answer' WHERE id = '$id'";
            $run = mysqli_query($link, $res);
            if($run){
                header('Location:add_question.php?id=9');
            }
        }
    }
    ?>