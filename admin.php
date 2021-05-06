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
$requestParam = $_GET['search'] ?? 0;
echo $requestParam;


        $getDataFromDB = "SELECT * FROM $tableName LIMIT $requestParam";
        $runQueryGet = $connectionStatusQuery->query($getDataFromDB);
        if($runQueryGet->num_rows > 0){
            ?>
<table border="4">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>number</th>
        <th>message</th>
    </tr>

    <?php
            while($row = $runQueryGet->fetch_assoc()){
                echo "<tr>";
              echo "<td>".$row["name"]."</td>";
              echo "<td>".$row["email"]."</td>";
              echo "<td>".$row["phoneNumber"]."</td>";
              echo "<td>".$row["message"]."</td>";
              echo"</tr>";
            }
            ?>

</table>
<?php
        }



}


?>