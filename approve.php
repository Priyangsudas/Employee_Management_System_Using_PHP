<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("company");

$x = $_GET["id"];//ei "id" ta holo view_leave.php page e $g er pasher id


$sql = "update emp_leave set status='Approved' where LeaveID=$x";
$res = mysql_query($sql);

if($res)
header('location:view_leave.php');

else
header('location:approve_unsucessful.html');


?>