<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> College Event Management</title>
    </head>
     <body bgcolor="lightblue">
        <img src="images\logo1.jpg">
        <BR>
        <a href="studentmain.php"> <h3> Home </h3></A>
        <BR>
     <center><img src="images\courselist.bmp"></center>
     <BR>
     
     <font face="verdana">     
<Table border="1" align="center" width="80%" cellpadding="10">
<tr bgcolor="#ffffaa"> <td>Course Name </td> <td> Details </td> <td> Duration </td>  </tr>        
        
<?php
include("config.php");
$sql = "SELECT * FROM CourseTab order by courseName";
$result = $conn->query($sql);

while($row = $result->fetch_row()) {
//print $db_field['authorname'] . ">";    
print "<tr><td >". $row[0] ."</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>" ;
}

?>
        
      
</table>
     
     </font>
             <BR>
       