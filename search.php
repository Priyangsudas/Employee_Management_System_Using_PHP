<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #para1
        {
            font-size: 25px;
            font-weight:600;
            color:#3d3c3d;
            line-height:50px;
        }
        #para2
        {
            font-size: 19px;
            font-weight:300;
            color:#424142;
            line-height:50px;
        }
        #box
        {
            margin-left:395.8px;
            margin-top:50px;
            height:600px;
            width:450px;
            display:flex;
            flex-wrap:wrap;
            border:solid 0.9px black;
            justify-content:center;
        }
        #box1
        {
            height:600px;
            width:200px;
        }
        #box2
        {
            height:600px;
            width:200px;
        }
    </style> 
</head>
<body>
    <?php session_start(); ?>

    <?php

    if(!isset($_SESSION["u1"]))
    {
        echo "<h1> Session Expired <a href='Admin_login.html'> Login Again </a> </h1>";
    }

    else{

    ?>
    <div id="container">
        <div id="up">
            <div id="left_up">
                <p id="p1">Master Admin</p>
            </div>
            <div id="right_up">
            <h4  style="text-align:right"> <a href="admin_logout.php">Logout </a></h3>
            </div>
        </div>
        <div id="down">
            <div id="left_down">
                <a href="Admin_dashboard.php"><span class="material-symbols-outlined"style="margin-right: 10px;">dashboard_customize</span>Dashboard</a>
                <a href="Add_employee1.php">Add Employee<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 60px;"></i></a>
                <a href="view.php">Employee Details<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 40px;"></i></a>
                <a href="search1.php">Search Employee<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:42px;"></i></a>
                <a href="view_leave.php">Leave Application<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:35px;"></i></a>
                <a href="view_leave_application.php">Leave Details<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:72px;"></i></a>
                <a href="employee_attendence1.php">Attendence<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 92px;"></i></a>
                <a href="add_task1.php">Add Task<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:109px;"></i></a>
                <a href="view_task.php">Task Details<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:85px;"></i></a>
            </div>
            <div id="right_down">
                <?php
                    $con=mysql_connect("localhost","root","");
                    $db=mysql_select_db("company");

                    $c1=$_POST["txt1"];
                    $g1=$_POST["txt2"];

                    $sql="select * from employee where Email='$c1' and Employee_id='$g1'";
                    $res=mysql_query($sql);

                    if($res)
                    {
                        while($row=mysql_fetch_array($res))
                        {
                            $a=$row["Employee_Name"];
                            $b=$row["Date_Of_Birth"];
                            $c=$row["Email"];
                            $d=$row["Mobile_Number"];
                            $e=$row["Gender"];
                            $f=$row["Adress"];
                            $g=$row["Employee_id"];
                            $h=$row["Designation"];
                            $i=$row["Joining_Date"];
                            $j=$row["Depertment_id"];
                            $k=$row["Salary"];
                            $l=$row["Project"];


                            echo "<div id='box'>";
                                echo "<div id='box1'>";
                                    echo "<p id='para1'>Employee Name:</p>";
                                    echo "<p id='para1'>Date Of Birth:</p>";
                                    echo "<p id='para1'>Email:</p>";
                                    echo "<p id='para1'>Mobile Number:</p>";
                                    echo "<p id='para1'>Gender:</p>";
                                    echo "<p id='para1'>Adress:</p>";
                                    echo "<p id='para1'>Employee ID:</p>";
                                    echo "<p id='para1'>Designation:</p>";
                                    echo "<p id='para1'>Joining Date:</p>";
                                    echo "<p id='para1'>Depertment ID:</p>";
                                    echo "<p id='para1'>Salary:</p>";
                                    echo "<p id='para1'>Project:</p>";
                                echo "</div>";

                                echo "<div id='box2'>";
                                    echo "<p id='para2'>$a</p>";
                                    echo "<p id='para2'>$b</p>";
                                    echo "<p id='para2'>$c</p>";
                                    echo "<p id='para2'>$d</p>";
                                    echo "<p id='para2'>$e</p>";
                                    echo "<p id='para2'>$f</p>";
                                    echo "<p id='para2'>$g</p>";
                                    echo "<p id='para2'>$h</p>";
                                    echo "<p id='para2'>$i</p>";
                                    echo "<p id='para2'>$j</p>";
                                    echo "<p id='para2'>$k</p>";
                                    echo "<p id='para2'>$l</p>";
                                echo "</div>";
                            echo "</div>";
                        }
                    }
                ?> 
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</body>
</html>