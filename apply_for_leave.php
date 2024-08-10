<?php session_start(); ?>

<?php
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("company");

    $a=$_POST["txt1"];
    $b=$_POST["txt2"];
    $c=$_POST["txt3"];
    $d=$_POST["txt4"];
    $e=$_POST["txt5"];
    $f="Pending";

    $s = $_SESSION["uid"];

    $sql1="select * from emp_leave where Employee_id='$s'";
    $res1=mysql_query($sql1);


    if($res1)
    {
        $count=1;
        while(mysql_fetch_array($res1))
        {
            $count++;
        }
    }

    //echo $count;
    if($count>20)
    {
        header('location:leave_over.html');
        ;
    }

    else
    {

        $sql="insert into emp_leave(Employee_id, Employee_name, Leave_from, Leave_to, Reason, status) values ('$a','$b','$c','$d','$e','$f')";

        $res=mysql_query($sql);

        if($res)
            header('location:submission_sucessfull.html');
        else
            header('location:submission_unsucessfull.html');
    }
?>