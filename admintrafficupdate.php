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
  
<nav>
  <a href="#" id="menu-icon"></a>

  <ul>
   


  <li><a href="admintrafficupdate.php">Traffic Update</a></li>
  <li><a href="logout.php" id="current">Logout</a></li>





  </ul>
</nav>
</div>




<div id="sectionall">


















<center>

 <div id="sectionbody">
  <div id="sectionbody2">
<center>
 
<?php

if(!empty($_SESSION["usernameS"]) || !empty($_SESSION["passwordS"]))
    {
      if($_SESSION["Authority"] == "admin")
      {


$q1 = mysql_query("SELECT * FROM loc1");


        echo"

<center>
<br><br><br><br><br>
  <font color='#FFE700' size=4><b> Trafic Update</b></font>
  <br>
  <br><br>

  <table border=2 width=80%>
  <tr>
  <td>
  <center>
  Location
  </td>
  <td>
  <center>
  Action
  </td>
  </tr>
";


while($rowq1 = mysql_fetch_array($q1))
{
echo"
  <tr>
  <td>
  <center>
  $rowq1[8]
  </td>

  <form action='admintrafficupdate2.php' method=POST>
  <td>
  <center>
  <input type=hidden name='lid1' value='$rowq1[0]'>
  <input type=submit name='edit1' value='Edit'>
  </td>
  </form>

  </tr>
";
}


echo"
  </table>







";




}
}

    else { header("Location: index.php"); }


?>
        <br><br><br>











    










</div>


</div>

</div>








</body> 
</html>
