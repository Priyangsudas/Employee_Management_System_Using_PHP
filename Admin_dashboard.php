<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Admin</title>
    <link rel="stylesheet" href="Admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .h2{
            color:white;
            font-size:25px;
            margin-top:40px;
            margin-left:40px;
        }
        .h3{
            color:white;
            font-size:30px;
            margin-top:-28.6px;
            margin-left:120px;

        }
        .h2_second
        {
            color:white;
            font-size:25px;
            margin-top:45px;
            margin-left:38px;
        }
        .h2_third
        {
            color:white;
            font-size:25px;
            margin-top:45px;
            margin-left:52px;
        }

        .box
        {
            height:170px;
            width: 260px;
            margin: 25px;
            border-radius: 10px;
            background-image:linear-gradient(to left bottom,rgb(80, 4, 128) ,rgb(131, 21, 209),rgb(68, 2, 115));
            box-shadow:10px 10px 10px rgb(26, 27, 28);
        }
        #box4
        {
            background-image:url("p1.gif");
            background-size:cover; 
        }

        #box5
        {
            background-image:url("p2.gif");
            background-size:cover; 
        }

        #box6
        {
            background-image:url("p3.jpeg");
            background-size:cover; 
        }
   
        #box7
        {
            background-image:url("p4.gif");
            background-size:cover; 
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
                <a href="Add_employee1.php"><i class="fa-solid fa-user-plus fa-xs"style="margin-right: 10px;"></i>Add Employee</a>
                <a href="view.php"><i class="fa-solid fa-info fa-xs"style="margin-right: 10px;"></i>Employee Details</a>
                <a href="search1.php"><i class="fa-solid fa-magnifying-glass fa-xs"style="margin-right: 10px;"></i>Search Employee</a>
                <a href="view_leave.php"><i class="fa-solid fa-person-walking-arrow-right fa-xs"style="margin-right: 10px;"></i>Leave</a>
                <a href="view_leave_application.php"><i class="fa-solid fa-info fa-xs"style="margin-right: 10px;"></i>Leave Details</a>
                <a href="employee_attendence1.php"><i class="fa-solid fa-clipboard-user fa-xs"style="margin-right: 10px;"></i>Attendance</a>
                <a href="add_task1.php"><i class="fa-solid fa-list-check fa-xs"style="margin-right: 10px;"></i>Add Task</a>
                <a href="view_task.php"><i class="fa-solid fa-info fa-xs"style="margin-right: 10px;"></i>Task Details</a>
            </div>
            <div id="right_down">
                <div id="para_two_three">
                    <p id="p2">Dashboard</p>
                    <p id="p3">Control panel</p>
                </div>
                <div id="parent_box">
                    <div id="box1" class="box">
                    
                    
                    <h2 class="h2"> Total Employee :</h2>
                    <h3 class="h3">
                    <?php

                    $con=mysql_connect("localhost","root","");
                    $db=mysql_select_db("company");

                   
                    $sql="select * from employee";
                    $res=mysql_query($sql);


                    if($res)
                    {
                        $count=0;
                        while(mysql_fetch_array($res))
                        {
                            $count++;
                        }
                    }

                    echo "<br>".$count;


                    ?> 
                    </h3>


                    </div>
                    <div id="box2" class="box">
                    <h2 class="h2_second"> Completed Task :</h2>
                    <h3 class="h3">
                    <?php

                    $con=mysql_connect("localhost","root","");
                    $db=mysql_select_db("company");

                   
                    $sql="select * from task where status='completed'";
                    $res=mysql_query($sql);


                    if($res)
                    {
                        $count=0;
                        while(mysql_fetch_array($res))
                        {
                            $count++;
                        }
                    }

                    echo "<br>".$count;


                    ?> 
                    </h3>
                    </div>
                    <div id="box3" class="box">
                    <h2 class="h2_third"> Pending Task :</h2>

                    <h3 class="h3">
                    <?php

                    $con=mysql_connect("localhost","root","");
                    $db=mysql_select_db("company");

                   
                    $sql="select * from task where status='Pending'";
                    $res=mysql_query($sql);


                    if($res)
                    {
                        $count=0;
                        while(mysql_fetch_array($res))
                        {
                            $count++;
                        }
                    }

                    echo "<br>".$count;


                    ?> 
                    </h3></div>
                    <div id="box4" class="box"></div>
                    <div id="box5" class="box"></div>
                    <div id="box6" class="box"></div>
                    <div id="box7" class="box"></div>
                </div>
            </div>
        </div>
    </div>

    <?php
    }
    ?>
</body>
</html>