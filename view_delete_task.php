<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("company");

$y = $_GET["tid"];


$sql = "update task set status='Completed' where Task_id='$y'";
$res = mysql_query($sql);

if($res)
header('location:task_completed.html');

else
echo "notdeleted";
?>