<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="Employee_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <Style>
        .box
        {
            background-image:linear-gradient(to left bottom,rgb(242, 70, 214) ,rgb(217, 11, 183),rgb(161, 2, 134));
            box-shadow:10px 10px 10px rgb(26, 27, 28);
            height:170px;
            width: 260px;
            margin: 25px;
            border-radius: 10px;
        }
        .h2{
            color:rgb(1, 44, 48);
            font-size:25px;
            margin-top:44px;
            margin-left:60px;
        }
        .h3{
            color:rgb(1, 44, 48);
            font-size:30px;
            margin-top:-28.6px;
            margin-left:120px;
        }
        .h2_second
        {
            color:rgb(1, 44, 48);
            font-size:25px;
            margin-top:45px;
            margin-left:43px;
        }
        .h2_third
        {
            color:rgb(1, 44, 48);
            font-size:25px;
            margin-top:49px;
            margin-left:60px;
        }
        .h2_fourth
        {
            color:rgb(1, 44, 48);
            font-size:25px;
            margin-top:45px;
            margin-left:38px;
        }
        .h2_fifth
        {
            color:rgb(1, 44, 48);
            font-size:25px;
            margin-top:45px;
            margin-left:40px; 
        }
        .h3_fifth
        {
            color:rgb(1, 44, 48);
            font-size:30px;
            margin-top:5px;
            margin-left:120px;
        }
        #box6
        {
            background-image:url("p5.gif");
            background-size:cover; 
        }
        #box7
        {
            background-image:url("p4.gif");
            background-size:cover; 
        }
    </Style>
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
                <a href="profile.php"><i class="fa-solid fa-user fa-xs" style="margin-right: 10px;"></i>My Profile</a>
                <a href="my_attendence1.php"><i class="fa-solid fa-clipboard-user fa-xs"style="margin-right: 10px;"></i>My Attendance</a>
                <a href="apply_for_leave1.php"><i class="fa-solid fa-person-walking-arrow-right fa-xs"style="margin-right: 10px;"></i>Apply For Leave</a>
                <a href="leave_status.php"><i class="fa-solid fa-signal fa-xs"style="margin-right: 10px;"></i>Leave Status</a>
                <a href="my_task.php"><i class="fa-solid fa-list-check fa-xs"style="margin-right: 10px;"></i>My Task</a>
            </div>
            <div id="right_down">
                <div id="para_two_three">
                    <p id="p2">Dashboard</p>
                    <p id="p3">Control panel</p>
                </div>
                <div id="parent_box">
                    <div id="box1" class="box">
                                            
                    <h2 class="h2"> Taken Leave :</h2>
                    <h3 class="h3">

       
                    <?php

                    $con=mysql_connect("localhost","root","");
                    $db=mysql_select_db("company");

                    $s = $_SESSION["uid"];


                   
                    $sql="select * from emp_leave where Employee_id='$s'";
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
                    <h2 class="h2_second"> Pending Leave :</h2>
                    <h3 class="h3">

                    <?php

                    $con=mysql_connect("localhost","root","");
                    $db=mysql_select_db("company");

                    $s = $_SESSION["uid"];


                   
                    $sql="select * from emp_leave where Employee_id='$s'";
                    $res=mysql_query($sql);


                    if($res)
                    {
                        $count=0;
                        while(mysql_fetch_array($res))
                        {
                            $count++;
                        }
                        $due_leave = 20-$count;
                        echo "<br>".$due_leave;
                    }

                  
                    


                    ?> 
                    </h3>
                    </div>
                    <div id="box3" class="box">

                    <h2 class="h2_third"> Pending Task :</h2>
                    <h3 class="h3">

                    <?php

                    $con=mysql_connect("localhost","root","");
                    $db=mysql_select_db("company");

                    $s = $_SESSION["uid"];


                   
                    $sql="select * from task where Employee_ID='$s' and status='Pending'";
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
                    <div id="box4" class="box">
                        
                    <h2 class="h2_fourth"> Completed Task :</h2>
                    <h3 class="h3">


                    <?php

                        $con=mysql_connect("localhost","root","");
                        $db=mysql_select_db("company");

                        $s = $_SESSION["uid"];



                        $sql="select * from task where Employee_id='$s' and status='Completed'";
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
                    <div id="box5" class="box">

                        <h2 class="h2_fifth"> Promotion Exam :</h2>
                        <h3 class="h3_fifth"> 0 </h3>

                    </div>
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