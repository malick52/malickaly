<?php 
require"connexionn.php";
$sql="DELETE FROM `mane` WHERE `mane`.`id_emp` =$_GET[id_emp] ";

$conn->query($sql);
header('Location: liste.php');

?>