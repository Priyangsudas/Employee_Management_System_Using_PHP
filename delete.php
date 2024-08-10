<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("company");

$x = $_GET["em"];


$sql = "delete from employee where Email='$x'";
$res = mysql_query($sql);

if($res)
header('location:view.php');

else
header('location:delete_unsucessful.html');

?>