<?php
// if, for, do while, while, for in
// data types in php

// varaibles

// var variable_name = "value"


// $name = $_POST['name'];
// $email=$_POST['email'];
// $message = $_POST['message'];
// echo "Hi ".$name."your mail id is ".$email."<br/> <b>".$message."</b>";

$serverName = "localhost";
$databaseName = "batchsix";
$userName = "root";
$password = "";

$connectionStatusQuery = new mysqli($serverName,$userName,$password,$databaseName);

// var_dump($connectionStatusQuery);

if($connectionStatusQuery->connect_error !== null){
    echo "Unable to connect Database";
}else{
    echo "Connection was successful";
}





?>