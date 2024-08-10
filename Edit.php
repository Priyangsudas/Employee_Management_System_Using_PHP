<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("company");



$a=$_POST["txt1"];
$b=$_POST["txt2"];
$c=$_POST["txt3"];
$d=$_POST["txt4"];
$e=$_POST["rad"];
$f=$_POST["txt6"];
$g=$_POST["txt7"];
$h=$_POST["txt8"];
$i=$_POST["txt9"];
$j=$_POST["txt10"];
$k1=$_POST["txt11"];
$l=$_POST["txt12"];



$sql = "update employee set Employee_Name='$a' , Date_Of_Birth='$b',Email='$c',Mobile_Number='$d',Gender='$e',Adress='$f',Designation='$h',Joining_Date='$i',Depertment_id='$j',Salary='$k1',Project='$l' where Employee_id='$g'";

//echo $sql;

$res = mysql_query($sql);

if($res)
header('location:view.php');

else
echo "not edited";
?>