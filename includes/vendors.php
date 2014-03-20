<?php
include("db_connect.php");
$sql="SELECT * FROM datatest;";
$result = $conn->prepare($sql);
$result->execute();
$result=json_encode($result->fetchAll(PDO::FETCH_ASSOC));
header('Content-Type: application/json');
echo $result;
?>