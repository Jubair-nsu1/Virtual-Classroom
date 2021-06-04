<?php
include_once("dbConnection.php");
$id= isset($_GET['id'])? $_GET['id'] : "";
$stat = $con->prepare("Select * from Assignment where id=?");
$stat -> bindParam(1,$id);
$stat -> execute();
$row = $stat->fetch();
header();
echo $row['data'];
?>
