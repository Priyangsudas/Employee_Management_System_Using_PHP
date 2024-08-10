<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee's Attendence</title>
    <link rel="stylesheet" href="my_attendence.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #t1
        {
            margin-left: 10px;
        }
        table
        {
            border-collapse:collapse;
        }
        tr:nth-child(even)
        {
            background-color:#ffd9fe;
        }
    </style>    
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
                <a href="my_attendence.php">My Attendence<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 58px;"></i></a>
                <a href="apply_for_leave1.php">Apply For Leave<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 44px;"></i></a>
                <a href="leave_status.php">Leave Status<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 78px;"></i></a>
                <a href="my_task.php">My Task<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 111px;"></i></a>
            </div>
            <div id="right_down">
                <div id="right_down_up">
                            <?php

                                $con=mysql_connect("localhost","root","");
                                $db=mysql_select_db("company");    
                                
                                
                                $a1=$_POST["txt1"];
                                $b1=$_POST["txt3"];
                                
                                $sql="select Attendence_date, On_time,Out_time from attendence where Employee_ID='$a1' and Attendence_date='$b1'";
                                $res=mysql_query($sql);

                                if($res)
                                {
                                    echo "<table id='t1'border='1'width='1230'>";
                                    echo"<tr align='center'>";
                                    echo"<th width='25%'> Attendence Date </th>";
                                    echo"<th width='25%'> On time </th>";
                                    echo"<th width='25%'> Out time</th>";
                                    echo"</tr>";
                                    while($row=mysql_fetch_array($res))
                                    {
                                        $b=$row["Attendence_date"];
                                        $c=$row["On_time"];
                                        $d=$row["Out_time"];

                                        echo "<tr align='center'>";
                                        echo "<td>$b</td>";
                                        echo "<td>$c</td>";
                                        echo "<td>$d</td>";
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