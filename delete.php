<?php
include 'db.php' ;
$id= (int)$_GET['id'];
$sql = "delete from task where id = '$id' ";
if($db -> query($sql)){
header('location: index.php');
};
?>