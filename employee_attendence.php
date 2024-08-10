<?php
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("company");

    $a=$_POST["txt1"];
    $b=$_POST["txt2"];
    $c=$_POST["txt3"];
    $d=$_POST["txt4"];


    $sql1 = "select * from attendence where Employee_ID='$a' and Attendence_date='$b'";
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
        header('location:attendence_already_given.html');
 
    }

    else
    {

    $sql="insert into attendence values ('$a','$b','$c','$d')";

    $res=mysql_query($sql);

    if($res)
        header('location:attendence_add_sucessful.html');
    else
        header('location:attendence_add_unsucessful.html');
    }
    
?>