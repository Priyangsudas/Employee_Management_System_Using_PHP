<?php session_start(); ?>

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("company");

$a=$_POST["text1"];
$b=$_POST["text2"];

$_SESSION["uid"] = $a;
$_SESSION["mob"] = $b;

$sql="select * from employee where Employee_id='$a' and Mobile_Number=$b";

$res=mysql_query($sql);

$k=0;

if($res)
{
    while(mysql_fetch_array($res))
    {
        $k=1;
    }
}
if($k==1)
    header('location:Employee_dashboard.php');
else
    header('location:Employee_login_Unsucessful.html');
?>