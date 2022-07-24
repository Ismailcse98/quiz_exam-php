<?php
$hostName = 'localhost';
$dbUserName = 'proali';
$dbPassword = 'proali123';
$dbName = 'quizexam';

$link = mysqli_connect($hostName, $dbUserName, $dbPassword,$dbName);
if(!$link){
    echo "Database not connected";
}

?>