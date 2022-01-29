<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> College Event Management</title>
    </head>
     <body bgcolor="lightblue">
        <img src="images\logo1.jpg">
        <BR>
        <BR>
     <center><img src="images\course.bmp"></center>
<?php

$res1="";
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$t1=addslashes($_POST['text1']); 
$t2=addslashes($_POST['text2']); 
$t3=addslashes($_POST['text3']); 

//echo($myusername);
$sql="Insert into CourseTab values('$t1','$t2','$t3')";
$result = $conn->query($sql);
if(!$result)
{
    $res1= "Record not inserted";
//header("location: adminmain.php");
}
else 
{
    $res1= "Record inserted successfully";
}
}
?>
     

<form action="admincourse.php" method="POST">
<BR>
<Table border="0" align="center" width="60%" cellpadding="10">
<tr><td height="60"  > Enter Course Name  </td><td> <input name="text1" type="text" style="height: 25px; width: 250px"> </td>  </tr>
<tr><td height="60" >  Course Details </td><td> <Textarea name="text2" type="text" rows="5" cols="20" style="width: 250px"> </textarea>  </td>  </tr>
<tr><td height="60" >  Duration </td><td> <input name="text3" type="text" style="height: 25px; width: 250px"> </td>  </tr>



<tr><td height="100" >    <input name="button1" type="button" value="   Admin Main   " onClick="location.href='adminmain.php'" style="height: 25px; width: 150px">

</td><td align="left"> <input name="submit" type="submit" value="   Save   " style="height: 25px; width: 150px"> </td>  </tr>
</table>    
</form>     
<BR>
<?php
echo($res1);
?>
    </body>
</html>