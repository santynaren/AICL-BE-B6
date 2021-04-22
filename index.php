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
$tableName = "websitequery";

$connectionStatusQuery = new mysqli($serverName,$userName,$password,$databaseName);

// var_dump($connectionStatusQuery);

if($connectionStatusQuery->connect_error !== null){
    echo "Unable to connect Database";
}else{

    $insertingFormData = "INSERT INTO $tableName VALUES ('','test','test1','test2','test3')";
    $runQueryStatus = $connectionStatusQuery->query($insertingFormData);
    var_dump($runQueryStatus);
}





?>