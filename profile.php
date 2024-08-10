<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee's Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php session_start(); ?>

    <?php

    if(!isset($_SESSION["uid"]))
    {
        echo "<h1> Session Expired <a href='Employee_login.html'> Login Again </a> </h1>";
    }

    else{

    ?>
    <div id="container">
        <div id="up">
            <div id="left_up">
                <p id="p1">Employee Turnover</p>
            </div>
            <div id="right_up">
            <h4  style="text-align:right"> <a href="employee_logout.php">Logout </a></h3>
            </div>
        </div>
        <div id="down">
            <div id="left_down">
                <a href="Employee_dashboard.php"><span class="material-symbols-outlined"style="margin-right: 10px;">dashboard_customize</span>Dashboard</a>
                <a href="profile.php">My Profile<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 93px;"></i></a>
                <a href="my_attendence1.php">My Attendence<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 58px;"></i></a>
                <a href="apply_for_leave1.php">Apply For Leave<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 44px;"></i></a>
                <a href="leave_status.php">Leave Status<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 78px;"></i></a>
                <a href="my_task.php">My Task<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 111px;"></i></a>
            </div>
            <div id="right_down">
                <h1 id='h1'> <center>MY PROFILE</center> </h1>

            <?php

                $con=mysql_connect("localhost","root","");
                $db=mysql_select_db("company");


                $s = $_SESSION["mob"];

                $sql="select * from employee where Mobile_Number='$s'";
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