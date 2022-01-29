<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> College Event Management</title>
    </head>
     <body bgcolor="lightblue">
        <img src="images\logo1.jpg">
        <BR>
        <BR>
     <center><img src="images\studentlogin.bmp"></center>
<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form 
$myusername=addslashes($_POST['text1']); 
$mypassword=addslashes($_POST['text2']); 

$sql="SELECT * FROM StudentTab WHERE (regno='$myusername') and pword='$mypassword'";

$result = $conn->query($sql);
if($row = $result->fetch_row()) 
{
$_SESSION["regnovar"]=$myusername;
$_SESSION["coursevar"]=$row[6];

header("location: studentmain.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
     

        <form action="studentlogin.php" method="POST">
        <BR>
        <Table border="0" align="center" width="60%" cellpadding="10">
        <tr><td height="60"  >    
        RegNo
        </td><td> <input name="text1" type="text"> 
        
      
        </td>  </tr>
        <tr><td height="60" >    
        Password
        </td><td> <input name="text2" type="password"> </td>  </tr>
        <tr><td height="100" >    
        
        </td><td align="left"> <input name="submit" type="submit" value="Submit" style="height: 25px; width: 150px"> </td>  </tr>
        </table>    
     </form>     

    </body>
</html>
