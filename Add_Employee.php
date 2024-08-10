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


$sql1 = "select * from employee where Employee_Id='$g'";
$res1 = mysql_query($sql1);

$k = 0;
if($res1)
{
    while(mysql_fetch_array($res1))
    {
        $k=1;
    }
}

if($k==1)
{
    header('location:exist_employee.html');
    
}

else
{
    $sql="insert into employee values ('$a','$b','$c',$d,'$e','$f','$g','$h','$i','$j',$k1,$l)";

    $res=mysql_query($sql);

    if($res)
        header('location:view.php');
    else
        header('location:add_employee_unsucessfull.html');
}

?>