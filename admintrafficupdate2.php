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


        echo"

<center>
<br><br><br><br><br>
  <font color='#FFE700' size=4><b> Trafic Update</b></font>
  <br>
  <br><br>
";




if(isset($_POST['update1']))
      {        

        $lid2 = $_POST['lid2'];
        $stime1 = $_POST['stime1'];
        $etime1 = $_POST['etime1'];
        $stime2 = $_POST['stime2'];
        $etime2 = $_POST['etime2'];
        $status1 = $_POST['status1'];
        $status2 = $_POST['status2'];


        if($lid2=='')
          { echo "<font color='red'>fields are required.</font>"; }
          else {
          $q5 = "UPDATE loc1 SET stime1='$stime1',etime1='$etime1',stime2='$stime2',etime2='$etime2',color1='$status1',color2='$status2' where lid='$lid2'";

          $q6 = mysql_query($q5);
          print "<script type='text/javascript'>";
          print "alert('Successfully Updated')";
          print "</script>";
                }



      }










if(isset($_POST['edit1']))
      {        

        $lid1 = $_POST['lid1'];





$q1 = mysql_query("SELECT * FROM loc1 where lid='$lid1'");
$rowq1 = mysql_fetch_array($q1);

$_SESSION['lid3'] = $rowq1[0];





echo"
  <table border=0 width=80%>
  <form action='admintrafficupdate2.php' method='POST'>
  <tr>
  <td>
  <center>
  Location
  </td>
  </tr>

  <tr>
  <td>
  <center>
  <input type=text value='$rowq1[8]' readonly>
  </td>
  </tr>



  <tr>
  <td>
  <br>
  <br>
  <center>
  <font size=4>
  <b>
  Trafic Time
  <br><br>
  </td>
  </tr>
  


  <tr>
  <td>
  <center>
  Start Time
  </td>
  </tr>

  <tr>
  <td>
  <center>
  ";


  if($rowq1[2]=='00:00:00')
  {
    echo"
    <input type=time name='stime1' value=''>
    ";
  }

  else
  {
    echo"
    <input type=time name='stime1' value='$rowq1[2]'>
    ";
  }
  



echo"
  </td>
  </tr>



  <tr>
  <td>
  <center>
  End Time
  </td>
  </tr>

  <tr>
  <td>
  <center>
  ";

  if($rowq1[3]=='00:00:00')
  {
  echo"
  <input type=time name='etime1' value=''>
  ";
  }
  else
  {
  echo"
  <input type=time name='etime1' value='$rowq1[3]'>
  ";
  }


  echo"
  </td>
  </tr>




  <tr>
  <td>
  <center>
  Status
  </td>
  </tr>

  <tr>
  <td>
  <center>
  <select name='status1'>
  ";

  if($rowq1[6]=='red')
  {
    echo"
  <option value='red' selected>Heavy</option>
  <option value='blue'>Moderate</option>
  <option value='green'>Light</option>
  ";
  }


  elseif($rowq1[6]=='blue')
  {
    echo"
  <option value='red'>Heavy</option>
  <option value='blue' selected>Moderate</option>
  <option value='green'>Light</option>
  ";
  }

  else
  {
  echo"
  <option value='red'>Heavy</option>
  <option value='blue'>Moderate</option>
  <option value='green' selected>Light</option>
  ";
  }

  echo"
  </select>
  </td>
  </tr>








  <tr>
  <td>
  <br><br><br>
  </td>
  </tr>






  <tr>
  <td>
  <center>
  Start Time
  </td>
  </tr>

  <tr>
  <td>
  <center>
  ";


  if($rowq1[4]=='00:00:00')
  {
    echo"
    <input type=time name='stime2' value=''>
    ";
  }

  else
  {
    echo"
    <input type=time name='stime2' value='$rowq1[4]'>
    ";
  }
  



echo"
  </td>
  </tr>



  <tr>
  <td>
  <center>
  End Time
  </td>
  </tr>

  <tr>
  <td>
  <center>
  ";

  if($rowq1[5]=='00:00:00')
  {
  echo"
  <input type=time name='etime2' value=''>
  ";
  }
  else
  {
  echo"
  <input type=time name='etime2' value='$rowq1[5]'>
  ";
  }


  echo"
  </td>
  </tr>




  <tr>
  <td>
  <center>
  Status
  </td>
  </tr>

  <tr>
  <td>
  <center>
  <select name='status2'>
  ";

  if($rowq1[7]=='red')
  {
    echo"
  <option value='red' selected>Heavy</option>
  <option value='blue'>Moderate</option>
  <option value='green'>Light</option>
  ";
  }


  elseif($rowq1[7]=='blue')
  {
    echo"
  <option value='red'>Heavy</option>
  <option value='blue' selected>Moderate</option>
  <option value='green'>Light</option>
  ";
  }

  else
  {
  echo"
  <option value='red'>Heavy</option>
  <option value='blue'>Moderate</option>
  <option value='green' selected>Light</option>
  ";
  }

  echo"
  </select>
  </td>
  </tr>


  <tr>
  <td>
  <center>
  <br><br>
  <input type='hidden' name='lid2' value='$rowq1[0]'>
  <input type='submit' name='update1' value='Update'>
  </td>
  </tr>
</form>
  </table>




";

}



else
{


$lid4=$_SESSION['lid3'];


$q1 = mysql_query("SELECT * FROM loc1 where lid='$lid4'");
$rowq1 = mysql_fetch_array($q1);







echo"
  <table border=0 width=80%>
  <form action='admintrafficupdate2.php' method='POST'>
  <tr>
  <td>
  <center>
  Location
  </td>
  </tr>

  <tr>
  <td>
  <center>
  <input type=text value='$rowq1[8]' readonly>
  </td>
  </tr>



  <tr>
  <td>
  <br>
  <br>
  <center>
  <font size=4>
  <b>
  Trafic Time
  <br><br>
  </td>
  </tr>
  


  <tr>
  <td>
  <center>
  Start Time
  </td>
  </tr>

  <tr>
  <td>
  <center>
  ";


  if($rowq1[2]=='00:00:00')
  {
    echo"
    <input type=time name='stime1' value=''>
    ";
  }

  else
  {
    echo"
    <input type=time name='stime1' value='$rowq1[2]'>
    ";
  }
  



echo"
  </td>
  </tr>



  <tr>
  <td>
  <center>
  End Time
  </td>
  </tr>

  <tr>
  <td>
  <center>
  ";

  if($rowq1[3]=='00:00:00')
  {
  echo"
  <input type=time name='etime1' value=''>
  ";
  }
  else
  {
  echo"
  <input type=time name='etime1' value='$rowq1[3]'>
  ";
  }


  echo"
  </td>
  </tr>




  <tr>
  <td>
  <center>
  Status
  </td>
  </tr>

  <tr>
  <td>
  <center>
  <select name='status1'>
  ";

  if($rowq1[6]=='red')
  {
    echo"
  <option value='red' selected>Heavy</option>
  <option value='blue'>Moderate</option>
  <option value='green'>Light</option>
  ";
  }


  elseif($rowq1[6]=='blue')
  {
    echo"
  <option value='red'>Heavy</option>
  <option value='blue' selected>Moderate</option>
  <option value='green'>Light</option>
  ";
  }

  else
  {
  echo"
  <option value='red'>Heavy</option>
  <option value='blue'>Moderate</option>
  <option value='green' selected>Light</option>
  ";
  }

  echo"
  </select>
  </td>
  </tr>








  <tr>
  <td>
  <br><br><br>
  </td>
  </tr>






  <tr>
  <td>
  <center>
  Start Time
  </td>
  </tr>

  <tr>
  <td>
  <center>
  ";


  if($rowq1[4]=='00:00:00')
  {
    echo"
    <input type=time name='stime2' value=''>
    ";
  }

  else
  {
    echo"
    <input type=time name='stime2' value='$rowq1[4]'>
    ";
  }
  



echo"
  </td>
  </tr>



  <tr>
  <td>
  <center>
  End Time
  </td>
  </tr>

  <tr>
  <td>
  <center>
  ";

  if($rowq1[5]=='00:00:00')
  {
  echo"
  <input type=time name='etime2' value=''>
  ";
  }
  else
  {
  echo"
  <input type=time name='etime2' value='$rowq1[5]'>
  ";
  }


  echo"
  </td>
  </tr>




  <tr>
  <td>
  <center>
  Status
  </td>
  </tr>

  <tr>
  <td>
  <center>
  <select name='status2'>
  ";

  if($rowq1[7]=='red')
  {
    echo"
  <option value='red' selected>Heavy</option>
  <option value='blue'>Moderate</option>
  <option value='green'>Light</option>
  ";
  }


  elseif($rowq1[7]=='blue')
  {
    echo"
  <option value='red'>Heavy</option>
  <option value='blue' selected>Moderate</option>
  <option value='green'>Light</option>
  ";
  }

  else
  {
  echo"
  <option value='red'>Heavy</option>
  <option value='blue'>Moderate</option>
  <option value='green' selected>Light</option>
  ";
  }

  echo"
  </select>
  </td>
  </tr>


  <tr>
  <td>
  <center>
  <br><br>
  <input type='hidden' name='lid2' value='$rowq1[0]'>
  <input type='submit' name='update1' value='Update'>
  </td>
  </tr>
</form>
  </table>




";










}










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
