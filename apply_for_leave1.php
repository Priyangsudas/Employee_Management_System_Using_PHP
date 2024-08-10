<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Leave</title>
    <link rel="stylesheet" href="apply_for_leave.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .text2
        {
            height: 105px;
            width: 300px;
            margin: 4px 12px 15px 0;
            border-radius: 8px;
            border: none;
        }
        #btn:hover
        {
            background-color: rgb(250, 215, 248);
            font-size: 14.5px;
        }
        #table1
        {
            margin-left: 480px;
            margin-top: 70px;
        }
    </style>
    <script>
        function valid()
        {
            var a=document.f1.txt3.value;
            var b=document.f1.txt4.value;
            var c=document.f1.txt5.value;
            if (a=="")
            {
                alert("Please Enter Leave from");
                return false;
            }
            else if (b=="")
            {
                alert("Please Enter Leave to");
                return false;
            }
            else if (c=="")
            {
                alert("Please Enter Reason");
                return false;
            }
            else
            {
                return true;
            }   
        }
        </script>
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
                <h5 style="color: #f40b0b; margin-left:5px;"><i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:1000px;margin-top: 50px;"> </i> indicates required questions</h5>
                <form name="f1" action="apply_for_leave.php" method="post">
                <table id="table1">
                    <tr>
                        <td><p class="p4">Employee ID</p></td>
                    </tr>


                    <?php

                        $s = $_SESSION["uid"];

                        $con=mysql_connect("localhost","root","");
                        $db=mysql_select_db("company");

                        
                        $sql = "select * from employee where Employee_id='$s'";
                        $res = mysql_query($sql);

                        if($res)
                        {
                            while($row=mysql_fetch_array($res))
                            {
                                $p = $row["Employee_Name"];
                            }
                        }

                    ?>

                    <tr>
                        <td><input type="text" name="txt1" class="text1" value="<?php echo $s ?>" readonly></td>
                    </tr>
                    <tr>
                        <td><p class="p4">Employee Name</p></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="txt2" class="text1" value="<?php echo $p ?>" readonly></td>
                    </tr>
                    <tr>
                        <td><p class="p4">Leave from<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                    </tr>
                    <tr>
                        <td><input type="date" name="txt3" class="text1"></td>
                    </tr>
                    <tr>
                        <td><p class="p4">Leave to<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                    </tr>
                    <tr>
                        <td><input type="date" name="txt4" class="text1"></td>
                    </tr>
                    <tr>
                        <td><p class="p4">Reason<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                    </tr>
                    <tr>
                        <td><textarea name="txt5" class="text2" placeholder="Enter Reason"></textarea></td>
                    </tr>
                        <td> <input type="submit" name="sub" value="Apply for Leave" id="btn" onclick="return valid()"> </td>
                    </tr>
                </table>
            </form>    
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    
</body>
</html>