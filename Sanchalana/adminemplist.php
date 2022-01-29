
<?PHP include("headfile.php") ?>
<?PHP include("config.php") ?>


<A href="adminmain.php"> Admin Main </A> <BR> 
 

<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

    
    <table border="1" cellpadding="5" cellspacing="5"> 
    <tr> <td height="20" colspan="10"> <img style="-webkit-user-select: none" src="images/emplist.bmp"> </td> </tr>   
<?php
session_start();

$sql = "SELECT * FROM EmpDetTab  order by empcode";
$result = $conn->query($sql);

while($row = $result->fetch_row()) {
//print $db_field['authorname'] . ">";    
print "<tr><td >" . $row[0] . "</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[7] . "</td></tr>" ;
}

?>
</table>

</td><td width="25%"></td></tr>
</table>
<BR><BR><BR><BR><BR><BR>
<?PHP include("footerfile.php") ?>
