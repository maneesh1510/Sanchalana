
<?PHP include("headfile.php") ?>
<?PHP include("config.php") ?>


<A href="studentmain.php"> Student Main </A> <BR> 
 

<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

    
<?php
session_start();
$svar=$_SESSION["regnovar"];
$evar=$_GET['ecode'];

$sql = "SELECT  * from ApplicantTab where eventcode='$evar' and regno='$svar'";
$result = $conn->query($sql);
if($row = $result->fetch_row()) 
{
$res1="You allready applied for this event";
}
 else
 {
$sql="Insert into ApplicantTab values('$evar','$svar','N')";
//echo($sql);
$result = $conn->query($sql);
if($result)
{
    $res1= "You are successfully applied for this event";
//header("location: custmain.php");
}
else 
{
    $res1= "Record inserted successfully";
}
 }

echo $res1;
?>


</td><td width="25%"></td></tr>
</table>
<BR><BR><BR><BR><BR><BR>
<?PHP include("footerfile.php") ?>
