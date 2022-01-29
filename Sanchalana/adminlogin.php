<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Online Event Management</title>
    </head>
     <body bgcolor="lightblue">
     <img src="images\sanchalana.jpg" width=1500px height=160px class="img-fluid" alt="Responsive image">
        <BR>
        <BR>
     <center><img src="images\adminlogin.bmp"></center>
<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form 
$myusername=addslashes($_POST['text1']); 
$mypassword=addslashes($_POST['text2']); 
echo($myusername);
$sql="SELECT uName FROM logintab WHERE uname='$myusername' and pword='$mypassword'";
$result = $conn->query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
    echo("count is one 3");
session_register("myusername");
$_SESSION['login_user']=$myusername;

//header("location: adminmain.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
     

        <form action="adminlogin1.php" method="POST">
        <BR>
        <Table border="0" align="center" width="60%" cellpadding="10">
        <tr><td height="60"  >    
        User Name 
        </td><td> <input name="text1" type="text"> 
        
        <a
          href="javascript:alert('Username must minimum 4 characters')"><small><small>Help</small></small></a>
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
