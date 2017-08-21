<?php session_start(); include("sql-phpcnc.php"); ?>
<!DOCTYPE html>
<html> 
<head>
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <link href="css/css1.css" rel="stylesheet" type="text/css" />


</head> 
<body>



   
<div id="header">
  

</div>



<div id="sectionall">





<div id="clear">
</div>



















<center>

 <div id="sectionbody">
  <div id="sectionbody2">
<center>
  <br><br><br><br>
  <font color="#fff" size=6><b>Registration</b></font>

  <br>
  <br><br>

</center>











<?php


if(isset($_POST['submit2']))
{
   



@$username1 = $_POST['username'];
@$password1 = $_POST['password'];

@$firstname1 = $_POST['firstname'];
@$middlename1 = $_POST['middlename'];
@$lastname1 = $_POST['lastname'];


@$email1 = $_POST['email'];

@$sq = $_POST['sq'];
@$sqanswer = $_POST['sqanswer'];





@$authority = 'user';


 $registrationquery1 = mysql_query("SELECT userName from registration where userName='$username1'");
  $rqcheck1 = mysql_num_rows($registrationquery1);

  

  if($rqcheck1 == '1' || $sqanswer == '' || $username1=='' || $password1=='' || $firstname1=='' || $middlename1=='' || $lastname1=='' ) { echo 
    "<br><font color=yellow size=3>* Username is already registered. Please try again!</font>"; 

echo"
 <table id='table123'>
    <form action='registration.php' method='post'>
        


        


       <tr>
          <td>
            <font color=#fff><b>Username:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='username' size='15' minlength=3 required></td>
        </tr>





        <tr>
          <td>
            <font color=#fff><b>Password:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='password' name='password' size='15' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters' required></td>
        </tr>




         <tr>
          <td>
          <br>
            <hr>
            <br>
          </td>
        </tr>






        <tr>
          <td>
            <font color=#fff><b>Firstname:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='firstname' size='15' minlength=3 required></td>
        </tr>






        <tr>
          <td>
            <font color=#fff><b>Middleinitial:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='middlename' size='15' minlength=3 required></td>
        </tr>





        <tr>
          <td>
            <font color=#fff><b>Lastname:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='lastname' size='15' minlength=3 required></td>
        </tr>






        <tr>
          <td>
            <font color=#fff><b>Email:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='email' name='email' size='15' required></td>
        </tr>



        <tr>
          <td>
          <br>
            <hr>
            <br>
          </td>
        </tr>





        <tr>
          <td>
            <font color=#fff><b>Secret Question:</font>
          </td>
        </tr>
        <tr>
          <td align='left'>
          <select name='sq'>
          <option>How old are you?</option>
          <option>What would you like?</option>
          <option>What happens when ants wear stilts?</option>
          <option>Where are you from?</option>
          </select>
          </td>
        </tr>





         <tr>
          <td>
            <font color=#fff><b>Answer:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='sqanswer' size='15' required></td>
        </tr>






        <tr>
          <td colspan='2'>
            <br>
            <center><input type='submit' name='submit2' value='Register' /></form><br><br>
</td>
                      </tr>

        </table>
        <br><br><br>";}


  else {

        $q1 = "INSERT INTO registration(userName,password,firstname,middlename,lastname,email,authority,secretquestion,sqanswer)
        VALUES('$username1','$password1','$firstname1','$middlename1','$lastname1','$email1','$authority','$sq','$sqanswer')";
        $q2 = mysql_query($q1);

       

    print "<script type='text/javascript'>";
        print "alert('Account Registered! please login.')";
        print "</script>";



echo"


 <table border='0'>
    <form action='login.php' method='post'>
        

        <tr>
          <td>
            <font color=#fff><b>Username:</font>
          </td>

          <td align='left'><input type='text' name='username' size='20'/></td>
    </tr>

        <tr>
          <td>
            <font color=#fff><b>Password:</font>
          </td>

          <td align='left'><input type='password' name='password' size='20'/></td>
        </tr>

        <tr>
          <td colspan='2'>
            <center><input type='submit' name='submit' value='LOGIN' /></form></td>
        </tr>

        </table>
        <br><br><br>



";












           }














       




  }













else{

  echo"


 <table id='table123'>
    <form action='registration.php' method='post'>
        

      

        <tr>
          <td>
            <font color=#fff><b>Username:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='username' size='15' minlength=3 required></td>
        </tr>





        <tr>
          <td>
            <font color=#fff><b>Password:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='password' name='password' size='15' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters' required></td>
        </tr>




         <tr>
          <td>
          <br>
            <hr>
            <br>
          </td>
        </tr>






        <tr>
          <td>
            <font color=#fff><b>Firstname:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='firstname' size='15' minlength=3 required></td>
        </tr>






        <tr>
          <td>
            <font color=#fff><b>Middleinitial:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='middlename' size='15' minlength=3 required></td>
        </tr>





        <tr>
          <td>
            <font color=#fff><b>Lastname:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='lastname' size='15' minlength=3 required></td>
        </tr>



        <tr>
          <td>
            <font color=#fff><b>Email:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='email' name='email' size='15' required></td>
        </tr>




       <tr>
          <td>
          <br>
            <hr>
            <br>
          </td>
        </tr>






        <tr>
          <td>
            <font color=#fff><b>Secret Question:</font>
          </td>
        </tr>
        <tr>
          <td align='left'>
          <select name='sq'>
          <option>How old are you?</option>
          <option>What would you like?</option>
          <option>What happens when ants wear stilts?</option>
          <option>Where are you from?</option>
          </select>
          </td>
        </tr>





         <tr>
          <td>
            <font color=#fff><b>Answer:</font>
          </td>
        </tr>
        <tr>
          <td align='left'><input type='text' name='sqanswer' size='15' required></td>
        </tr>





        <tr>
          <td>
            <br>
            <center><input type='submit' name='submit2' value='Register' /></form><br><br>
</td>
                      </tr>

        </table>
        <br><br><br>



";

}


?>


    










</div>







</div></div>







  
</body> 
</html>
