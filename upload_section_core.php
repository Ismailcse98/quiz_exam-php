<?php
require_once('admin/config.php');
    $email = $_COOKIE['em'];
    if(isset($_REQUEST['submit'])){
        $filename_one = $_FILES['first_file']['name'];
        $file_one_tmp_name = $_FILES['first_file']['tmp_name'];
        $location_one = "stu_file_upload/".$email.substr(md5(time()),0,2).$filename_one;

        $filename_two = $_FILES['second_file']['name'];
        $file_two_tmp_name = $_FILES['second_file']['tmp_name'];
        $location_two = "stu_file_upload/".$email.substr(md5(time()),0,3).$filename_two;

        $filename_three = $_FILES['third_file']['name'];
        $file_three_tmp_name = $_FILES['third_file']['tmp_name'];
        $location_three = "stu_file_upload/".$email.substr(md5(time()),0,4).$filename_three;

        if(move_uploaded_file($file_one_tmp_name, $location_one) &&       move_uploaded_file($file_two_tmp_name, $location_two)    &&move_uploaded_file($file_three_tmp_name, $location_three)){
            header("Location:welcome.php");
        }else{
            header("Location:index.php?false");
        }
    }
?>