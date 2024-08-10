<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="Add_Employee.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function valid()
        {
            var a=document.f1.txt1.value;
            var b=document.f1.txt2.value;
            var c=document.f1.txt3.value;
            var d=document.f1.txt4.value;
            var e=document.f1.rad.value;
            var f=document.f1.txt6.value;
            var g=document.f1.txt7.value;
            var h=document.f1.txt8.value;
            var i=document.f1.txt9.value;
            var j=document.f1.txt10.value;
            var k=document.f1.txt11.value;
            var l=document.f1.txt12.value;
            if (a==""){
                alert("Please Enter Name");
                return false;
            }
            else if (b==""){
                alert("Please Enter Date of Birth");
                return false;
            }
            else if (c==""){
                alert("Please Enter Email");
                return false;
            }
            else if (d==""){
                alert("Please Enter Mobile Number");
                return false;
            }
            else if (e==""){
                alert("Please Enter Gender");
                return false;
            }
            else if (f==""){
                alert("Please Enter Adress");
                return false;
            }
            else if (g==""){
                alert("Please Enter Employee ID");
                return false;
            }
            else if (h==""){
                alert("Please Enter Designation");
                return false;
            }
            else if (i==""){
                alert("Please Enter Joining Date");
                return false;
            }
            else if (j==""){
                alert("Please Enter Depertment Id");
                return false;
            }
            else if (k==""){
                alert("Please Enter Salary");
                return false;
            }
            else if (l==""){
                alert("Please Enter Project");
                return false;
            }
            else if (d.length!=10){
                alert("Please Enter a Valid Mobile Number");
                return false;
            }
        }
    </script>
</head>
<body>
                <?php

                $con=mysql_connect("localhost","root","");
                $db=mysql_select_db("company");

                $x = $_GET["eid"];

                $sql="select * from employee where Employee_id='$x'";
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

                    
                }
                    
                }
                ?>
    <div id="container">
        <div id="up">
            <div id="left_up">
                <p id="p1">Master Admin</p>
            </div>
            <div id="right_up">
            </div>
        </div>
        <div id="down">
            <div id="left_down">
                <a href="Admin_dashboard.php"><span class="material-symbols-outlined"style="margin-right: 10px;">dashboard_customize</span>Dashboard</a>
                <a href="Add_employee.html">Add Employee<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 68px;"></i></a>
                <a href="view.php">Employee Details<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 45px;"></i></a>
                <a href="search.html">Search Employee<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:47px;"></i></a>
                <a href="view_leave.php">Leave Application<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:40px;"></i></a>
                <a href="view_leave_application.php">Leave Details<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:77px;"></i></a>
                <a href="employee_attendence1.php">Employee Attendence<i class="fa-solid fa-chevron-left fa-xs"style="margin-left: 11px;"></i></a>
                <a href="add_task1.php">Add Task<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:109px;"></i></a>
                <a href="view_task.php">Task Details<i class="fa-solid fa-chevron-left fa-xs"style="margin-left:85px;"></i></a>
            </div>
            <div id="right_down">
                <p id="p2">Registration</p>
                <h5 style="color: #f40b0b; margin-left:5px;"><i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:1000px;"> </i> indicates required questions</h5>
                <p id="p3">Personal Details</p>
             

                <form name="f1" action="Edit.php" method="post">

                <table width="900" height="40">
                    <tr>
                        <td><p class="p4">Full Name<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                        <td><p class="p4">Date of Birth<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                        <td><p class="p4">Email<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="txt1" class="text1" placeholder="Enter your name" value="<?php echo $a ?>"></td>
                        <td><input type="date" name="txt2" class="text1" value="<?php echo $b ?>"></td>
                        <td><input type="email" name="txt3" class="text1" placeholder="Enter your email" value="<?php echo $c ?>"></td>
                    </tr>
                    <tr>
                        <td><p class="p4">Mobile Number<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                        <td><p class="p4">Gender<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                        <td><p class="p4">Adress<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="txt4" class="text1" placeholder="Enter mobile number" value="<?php echo $d ?>"></td>
                        <td>
                            <input type="radio" name="rad" value="male" id="rad1">Male
                            <input type="radio" name="rad" value="female" id="rad2">Female
                            <input type="radio" name="rad" value="others" id="rad2">Others
                        </td>
                        <td><input type="text" name="txt6" class="text1" placeholder="Enter your adress" value="<?php echo $f ?>"></td>
                    </tr>
                </table>
                <p id="p5">Identity Details</p>
                <table width="900" height="40">
                    <tr>
                        <td><p class="p4">Employee Id<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                        <td><p class="p4">Designation<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                        <td><p class="p4">Joining Date<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="txt7" class="text1" placeholder="Enter Employee ID" value="<?php echo $g ?>"></td>
                        <td><input type="text" name="txt8" class="text1" placeholder="Enter your Designation" value="<?php echo $h ?>"></td>
                        <td><input type="date" name="txt9" class="text1" value="<?php echo $i ?>"></td>
                    </tr>
                    <tr>
                        <td><p class="p4">Depertment Id<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                        <td><p class="p4">Salary<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                        <td><p class="p4">Project<i class="fa-solid fa-asterisk fa-2xs" style="color: #f40b0b; margin-left:5px;"></i></p></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="txt10" class="text1" placeholder="Enter Depertment ID" value="<?php echo $j ?>"></td>
                        <td><input type="text" name="txt11" class="text1" placeholder="Enter your salary" value="<?php echo $k ?>"></td>
                        <td><input type="text" name="txt12" class="text1" placeholder="Enter project done" value="<?php echo $l ?>"></td>
                    </tr>


		<tr>
			<td> <input type="submit" name="sub" value="Edit Employee" id="btn" onclick="return valid()"> </td>
		</tr>
                </table>
                
                

            </form>

            </div>
        </div>
    </div>
</body>
</html>