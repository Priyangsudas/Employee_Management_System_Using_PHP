<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Task</title>
    <link rel="stylesheet" href="view_task.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #t1
        {
            margin-left: 10px;
        }
        #right_down_up
        {
            width:auto;
            height:100%;
            overflow:hidden;
            overflow-x:scroll;
            overflow-y:scroll;
        }
        table
        {
            border-collapse:collapse;
        }
        tr:nth-child(even)
        {
            background-color:#D6E6FC;
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
                <a href="Add_employee1.php">Add Employee<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 52px;"></i></a>
                <a href="view.php">Employee Details<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 29px;"></i></a>
                <a href="search1.php">Search Employee<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:30px;"></i></a>
                <a href="view_leave.php">Leave Application<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:25px;"></i></a>
                <a href="view_leave_application.php">Leave Details<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:60px;"></i></a>
                <a href="employee_attendence1.php">Attendence<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 78px;"></i></a>
                <a href="add_task1.php">Add Task<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:96px;"></i></a>
                <a href="view_task.php">Task Details<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:71px;"></i></a>
            </div>
            <div id="right_down">
                <div id="right_down_up">
                    <?php

                            $con=mysql_connect("localhost","root","");
                            $db=mysql_select_db("company");

                            
                            $c1=$_POST["txt1"];


                            $sql="select * from task where Employee_ID='$c1' and status='Pending'";
                            $res=mysql_query($sql);

                            if($res)
                            {
                                
                                echo "<table id='t1'border='1'width='1230'>";
                                echo"<tr align='center'>";
                                echo"<th> Task ID </th>";
                                echo"<th> Employee ID </th>";
                                echo"<th> Task Details </th>";
                                echo"<th>Submission Date </th>";
                                echo"</tr>";

                            while($row=mysql_fetch_array($res))
                            {
                                $x=$row["Task_id"];
                                $a=$row["Employee_ID"];
                                $b=$row["Task_details"];
                                $c=$row["Submission_date"];

                                echo "<tr align='center'>";
                                echo "<td>$x</td>";
                                echo "<td>$a</td>";
                                echo "<td>$b</td>";
                                echo "<td>$c</td>";
                                echo "<td> <a href='view_delete_task.php?tid=$x'>task completed</a></td>";
                                echo "</tr>";
                            }
                                echo"</table>";
                            }
                    ?> 
                </div>    
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>