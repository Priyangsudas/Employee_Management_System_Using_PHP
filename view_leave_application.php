<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Leave Application</title>
    <link rel="stylesheet" href="view_leave_application.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function valid()
        {
            var a=document.f1.txt1.value;
            var b=document.f1.txt2.value;
            if (a=="")
            {
                alert("Please Enter Employee ID");
                return false;
            }
            else if (b=="")
            {
                alert("Please Enter Employee Name");
                return false;
            } 
        }
    </script>
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
                <h5 style="color: #f40b0b; margin-left:5px;"><i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:1000px;margin-top: 50px;"> </i> indicates required questions</h5>
                <form name="f1"action="view_leave_application1.php" method="post">
                        <table id="table1">
                            <tr>
                                <td><p class="p4">Employee ID<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                            </tr>
                            <tr>
                                <?php
                                $con=mysql_connect("localhost","root","");
                                $db=mysql_select_db("company");

                                
                                $sql = "select * from employee order by Employee_id";
                                $res = mysql_query($sql);

                                if($res)
                                {
                            ?>
                            <td>
                                <select name="txt1" class="text1">
                                    <option value="">  </option>


                                    <?php
                                    while($row=mysql_fetch_array($res))
                                    {
                                        $x = $row["Employee_id"];
                                        $_SESSION["uid"] = $x;

                                    ?>
                                        <option value="<?php echo $x ?>"> <?php echo $x ?> </option>
                                    
                                    <?php
                                        }
                                    ?>
                                </select>
                            </td>
                            <?php
                                }
                            ?>
                            </tr>
                            
                            <tr>
                                <td> <input type="submit" name="sub" value="View Leave" id="btn" onclick="return valid()"> </td>
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