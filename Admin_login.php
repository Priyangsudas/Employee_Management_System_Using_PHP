<?php session_start(); ?>

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("company");

$a=$_POST["text1"];
$b=$_POST["text2"];


$_SESSION["u1"] = $a;

$sql="select * from admin where Email='$a' and Password='$b'";



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
    header('location:Admin_dashboard.php');
else
    header('location:Admin_login_unsucessful.html');
?>