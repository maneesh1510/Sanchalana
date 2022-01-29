
<?PHP include("headfile.php") ?>
<?PHP include("config.php") ?>

<A href="adminmain.php"> Admin Main </A> <BR> 



<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$t1=addslashes($_POST['text1']); 
$t2=addslashes($_POST['text2']); 

//echo($myusername);
$sql="Insert into ProfessionTab  values('$t1','$t2')";
$result = $conn->query($sql);
if(!$result)
{
    $res1= "Record not inserted";
//header("location: custmain.php");
}
else 
{
    $res1= "Record inserted successfully";
}
}
?>


<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

    <form method="POST"    action="adminjob.php">
    <table border="0"> 
    <tr> <td height="20" colspan="2"> <img style="-webkit-user-select: none" src="images/jobnames.bmp"> </td> </tr>    
    <tr> <td height="60" colspan="2"> </td> </tr> 
    <tr> <td height="40"> Designation Name </td> <td> <input type="text" name="text1" value=""></td> </tr>
    <tr> <td height="40"> Details </td> <td> <input type="text" name="text2" value=""></td> </tr>
    <tr> <td height="40">  </td> <td align="center"> <input type="submit" name="Save" ></td> </tr>       
    </table>
        </form>
</td><td width="25%"></td></tr>
</table>
<?php
echo($res1);
?>
<?PHP include("footerfile.php") ?>
