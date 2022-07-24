<?php
require_once('config.php');

    if(isset($_REQUEST['add_file'])){
        $chap_name = $_REQUEST['chap_name'];
        $mark = $_REQUEST['mark'];
        $total_time = $_REQUEST['total_time'];
        

        $description_one = $_REQUEST['description_one'];
        $filename_one = $_FILES['file_one']['name'];
        $file_one_tmp_name = $_FILES['file_one']['tmp_name'];
        $location_one = "uploads/".substr(md5(time()),0,6).$filename_one;
        move_uploaded_file($file_one_tmp_name, $location_one);

        $description_two = $_REQUEST['description_two'];
        $filename_two = $_FILES['file_two']['name'];
        $file_two_tmp_name = $_FILES['file_two']['tmp_name'];
        $location_two = "uploads/".substr(md5(time()),0,7).$filename_two;
        move_uploaded_file($file_two_tmp_name, $location_two);

        $description_three = $_REQUEST['description_three'];
        $filename_three = $_FILES['file_three']['name'];
        $file_three_tmp_name = $_FILES['file_three']['tmp_name'];
        $location_three = "uploads/".substr(md5(time()),0,8).$filename_three;
        move_uploaded_file($file_three_tmp_name, $location_three);
        
        $role = $_REQUEST['role'];

        if(empty($chap_name) || empty($mark) || empty($total_time)|| empty($description_one) || empty($location_one) || empty($description_two) || empty($location_two) || empty($description_three) || empty($location_three) || empty($role)){
            header('Location:practical_exam.php?false');
            echo "data not inserted";
        }else{
            $res = "INSERT INTO practical_exam(chapter_name, mark, time, description_one,location_one,description_two,location_two,description_three,location_three,role) VALUES ('$chap_name','$mark','$total_time','$description_one','$location_one','$description_two','$location_two','$description_three','$location_three','$role')";
            $run = mysqli_query($link, $res);
            if($run){
                header("Location:practical_exam.php?true");
                echo "data inserted";
            }
        }
    }
?>