<?php
require_once('config.php');
// concepts of IT 
    if(isset($_REQUEST['concepts_of_it'])){
        $question = $_REQUEST['question'];
        $option1 = $_REQUEST['option1'];
        $option2 = $_REQUEST['option2'];
        $option3 = $_REQUEST['option3'];
        $option4 = $_REQUEST['option4'];
        $answer = $_REQUEST['answer'];
        if(empty($question) || empty($option1) || empty($option2) || empty($option3)|| empty($option4) || empty($answer)){
            header('Location:add_question.php?id=9&false');
        }else{
            $res = "INSERT INTO concepts_of_it (question,option1,option2,option3,option4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
            $run = mysqli_query($link, $res);
            if($run){
                header('Location:add_question.php?id=9&true');
            }
        }
    }
// Windows 10 
    if(isset($_REQUEST['windows_10'])){
        $question = $_REQUEST['question'];
        $option1 = $_REQUEST['option1'];
        $option2 = $_REQUEST['option2'];
        $option3 = $_REQUEST['option3'];
        $option4 = $_REQUEST['option4'];
        $answer = $_REQUEST['answer'];
        if(empty($question) || empty($option1) || empty($option2) || empty($option3)|| empty($option4) || empty($answer)){
            header('Location:add_question.php?id=2&&false');
        }else{
            $res = "INSERT INTO windows_10 (question,option1,option2,option3,option4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
            $run = mysqli_query($link, $res);
            if($run){
                header('Location:add_question.php?id=2&&true');
            }
        }
    }
// MS Word-2016 
    if(isset($_REQUEST['ms_word_16'])){
        $question = $_REQUEST['question'];
        $option1 = $_REQUEST['option1'];
        $option2 = $_REQUEST['option2'];
        $option3 = $_REQUEST['option3'];
        $option4 = $_REQUEST['option4'];
        $answer = $_REQUEST['answer'];
        if(empty($question) || empty($option1) || empty($option2) || empty($option3)|| empty($option4) || empty($answer)){
            header('Location:add_question.php?id=3&&false');
        }else{
            $res = "INSERT INTO ms_word_16 (question,option1,option2,option3,option4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
            $run = mysqli_query($link, $res);
            if($run){
                header('Location:add_question.php?id=3&&true');
            }
        }
    }
// MS Excel-2016 
    if(isset($_REQUEST['ms_excel_16'])){
        $question = $_REQUEST['question'];
        $option1 = $_REQUEST['option1'];
        $option2 = $_REQUEST['option2'];
        $option3 = $_REQUEST['option3'];
        $option4 = $_REQUEST['option4'];
        $answer = $_REQUEST['answer'];
        if(empty($question) || empty($option1) || empty($option2) || empty($option3)|| empty($option4) || empty($answer)){
            header('Location:add_question.php?id=10&false');
        }else{
            $res = "INSERT INTO ms_excel_16 (question,option1,option2,option3,option4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
            $run = mysqli_query($link, $res);
            if($run){
                header('Location:add_question.php?id=10&true');
            }
        }
    }
// ICDL 
    if(isset($_REQUEST['icdl'])){
        $question = $_REQUEST['question'];
        $option1 = $_REQUEST['option1'];
        $option2 = $_REQUEST['option2'];
        $option3 = $_REQUEST['option3'];
        $option4 = $_REQUEST['option4'];
        $answer = $_REQUEST['answer'];
        if(empty($question) || empty($option1) || empty($option2) || empty($option3)|| empty($option4) || empty($answer)){
            header('Location:add_question.php?id=5&false');
        }else{
            $res = "INSERT INTO icdl (question,option1,option2,option3,option4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
            $run = mysqli_query($link, $res);
            if($run){
                header('Location:add_question.php?id=5&true');
            }
        }
    }
// MS Access 2016 
    if(isset($_REQUEST['ms_access_16'])){
        $question = $_REQUEST['question'];
        $option1 = $_REQUEST['option1'];
        $option2 = $_REQUEST['option2'];
        $option3 = $_REQUEST['option3'];
        $option4 = $_REQUEST['option4'];
        $answer = $_REQUEST['answer'];
        if(empty($question) || empty($option1) || empty($option2) || empty($option3)|| empty($option4) || empty($answer)){
            header('Location:add_question.php?id=6&false');
        }else{
            $res = "INSERT INTO ms_access_16 (question,option1,option2,option3,option4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
            $run = mysqli_query($link, $res);
            if($run){
                header('Location:add_question.php?id=6&true');
            }
        }
    }
// MS PowerPoint 2016 
    if(isset($_REQUEST['ms_powerpoint_16'])){
        $question = $_REQUEST['question'];
        $option1 = $_REQUEST['option1'];
        $option2 = $_REQUEST['option2'];
        $option3 = $_REQUEST['option3'];
        $option4 = $_REQUEST['option4'];
        $answer = $_REQUEST['answer'];
        if(empty($question) || empty($option1) || empty($option2) || empty($option3)|| empty($option4) || empty($answer)){
            header('Location:add_question.php?id=7&false');
        }else{
            $res = "INSERT INTO ms_powerpoint_16 (question,option1,option2,option3,option4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
            $run = mysqli_query($link, $res);
            if($run){
                header('Location:add_question.php?id=7&true');
            }
        }
    }
// Final Exam 
    if(isset($_REQUEST['final_exam'])){
        $question = $_REQUEST['question'];
        $option1 = $_REQUEST['option1'];
        $option2 = $_REQUEST['option2'];
        $option3 = $_REQUEST['option3'];
        $option4 = $_REQUEST['option4'];
        $answer = $_REQUEST['answer'];
        if(empty($question) || empty($option1) || empty($option2) || empty($option3)|| empty($option4) || empty($answer)){
            header('Location:add_question.php?id=8&false');
        }else{
            $res = "INSERT INTO final_exam (question,option1,option2,option3,option4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$answer')";
            $run = mysqli_query($link, $res);
            if($run){
                header('Location:add_question.php?id=8&true');
            }
        }
    }
?>