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

<div id="hidden1">

</div>


<div id="sectionall">





















<center>

 <div id="sectionbody">
  <div id="sectionbody2">
<center>
  <br><br><br><br>
  <font color="#fff" size=5><b>Forgot Account</b></font>
  <br>
  <br><br>

</center>










 <table width='50%' border='0'>
    <form action='forgotaccount2.php' method='post'>
        
       
        <tr>
          <center>
          
          <td align="center"><input type='text' name='username' size='20' placeholder='Username'/></td>
        </tr>

        <tr>
          <td>
            &nbsp
          </td>
        </tr>

        <tr>
          <center>
       
          <td align="center">
            <select name='sq' width=2>
          <option>Select Secret Question</option>
          <option>How old are you?</option>
          <option>What would you like?</option>
          <option>What happens when ants wear stilts?</option>
          <option>Where are you from?</option>
          </select>
          </td>
        </tr>

        <tr>
          <center>
            
          <td align="center"><input type='text' name='sqans' size='20' placeholder='Answer'/></td>
        </tr>

        <tr>
          
          <td>
            <center>
               <br>
               <input type='submit' name='submit' value='Submit' /></form></td>
        </tr>

        </table>




        <br><br><br><br>

        <center>
          <font size="2">
          Don't Have an account? <a href='registration.php'>Create Account</a>
          </font>
        <br><br><br>











    










</div>


</div>



</div>








</body> 
</html>
