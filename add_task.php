<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("company");

$a=$_POST["txt1"];
$b=$_POST["txt2"];
$c=$_POST["txt3"];
$status="Pending";

$sql="insert into task (Employee_ID, Task_details, Submission_date, status) values ('$a','$b','$c','$status')";

$res=mysql_query($sql);

if($res)
    header('location:add_task_sucessful.html');
else
    header('location:add_task_unsucessful.html');