function valid()
{
    var a=document.f1.txt1.value;
    var b=document.f1.txt2.value;
    if (a=="")
        alert("Please Enter Employee ID");
    else if (b=="")
        alert("Please Enter Mobile Number");
    else if (b.length != 10)
        alert("Please Enter a Valid Phone Number");
}