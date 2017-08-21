<?php session_start(); include("sql-phpcnc.php"); ?>
<!DOCTYPE html>
<html> 
<head>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <link href="css/css1.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="/1lms/js/jquery-1.11.0.min.js"></script>

</head> 
<body>



   
<div id="header">
  

</div>




<div id="sectionall">












<center>

 <div id="sectionbody">
   <div id="sectionbody2">
<center>
  <br>
  <br>
  <br><br>
  <font color="#fff" size=5><b>Forgot Account</b></font>
  <br>
  <br><br>

</center>


<?php

if(isset($_POST['submit']))
{  

$username1 = $_POST['username'];
$sq = $_POST['sq'];
$sqans = $_POST['sqans'];

 $registrationquery1 = mysql_query("SELECT userName from registration where userName='$username1'");
 $rqcheck1 = mysql_num_rows($registrationquery1);


 if($rqcheck1 == '0')
 {
  echo"<font color=yellow size=3>* Username is not registered. Please try again!</font>
  <br>
  <br>
  <a href='forgotaccount.php'><font color=red size=3>Go Back</font></a>
  
  ";
 }

else{

$q1 = mysql_query("SELECT * FROM registration Where userName='$username1'");
$row1 = mysql_fetch_array($q1);


if($sq == $row1[12] AND $sqans == $row1[13])
{
echo"
<table>
<tr>
<td align=right>
Username:
</td>
<td>
$username1
</td>
</tr>
<tr>
<td align=right>
Password:
</td>
<td>
$row1[2]
</td>
</tr>
</table>
";
}


else { echo"<font color=yellow size=3>* Secret Question and Answer not match. Please try again!</font>
  <br>
  <br>
  <a href='forgotaccount.php'><font color=red size=3>Go Back</font></a>
  
  "; }


}


}


?>



 
        <br><br><br>











    










</div>





</div>






</div>







</body> 
</html>
