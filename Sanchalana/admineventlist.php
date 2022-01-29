
<?PHP include("headfile.php") ?>
<?PHP include("config.php") ?>


<A href="adminmain.php"> Admin Main </A> <BR> 
 

<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

    
    <table border="1" cellpadding="5" cellspacing="5"> 
    <tr> <td height="20" colspan="10"> <img style="-webkit-user-select: none" src="images/eventlist.bmp"> </td> </tr>   
	 <tr> <td>EventCode </td><td>Event Name </td> <td>Event Type </td> <td> Details </td><td>Date </td><td>Contact </td><td>Mobile No </td> </tr>
<?php
session_start();

$sql = "SELECT * FROM EventTab  order by eventcode";
$result = $conn->query($sql);

while($row = $result->fetch_row()) {
print "<tr><td >" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td></tr>" ;
}

?>
</table>

</td><td width="25%"></td></tr>
</table>
<BR><BR><BR><BR><BR><BR>
<?PHP include("footerfile.php") ?>
