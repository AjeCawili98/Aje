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
   

  
 <li><a href="index.php">About Us</a></li>


    

  </li>
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="login.php" id="current">Login</a></li>





  </ul>
</nav>
</div>



<div id="sectionall">





















<center>
<div id="sectionbody">
 <div id="sectionbody2">
<center>
  <br><br><br>
  <img src="img/logo.png" width=150 >
  <br>
  <br><br>

</center>







<script>
  function Countdown(options) {
  var timer,
  instance = this,
  seconds = options.seconds || 10,
  updateStatus = options.onUpdateStatus || function () {},
  counterEnd = options.onCounterEnd || function () {};

  function decrementCounter() {
    updateStatus(seconds);
    if (seconds === 0) {
      counterEnd();
      instance.stop();
    }
    seconds--;
  }

  this.start = function () {
    clearInterval(timer);
    timer = 0;
    seconds = options.seconds;
    timer = setInterval(decrementCounter, 1000);
  };

  this.stop = function () {
    clearInterval(timer);
  };
}

</script>

<?php 
  if(isset($_SESSION['blockInSeconds'])){
    ?>

    <script>

      var myCounter = new Countdown({  
          seconds:<?php echo $_SESSION['blockInSeconds'];?>,  // number of seconds to count down
          onUpdateStatus: function(sec){
            $('input').prop({disabled: true});
            $('#blockSection>font').html("Please try again after " + sec + " second/s.");
            <?php $_SESSION['blockInSeconds']--; ?>
          }, // callback for each second
          onCounterEnd: function(){ 
            alert('unblocked');
            $('input').prop({disabled: false});
            $('#blockSection>font').html("");
          } // final action
      });
      myCounter.start();
    </script>

    <?php
  }
 ?>

<?php

if(isset($_SESSION['loginAttempt'])){

} else {
  $_SESSION['loginAttempt'] = 1;
}

if(isset($_POST['submit']))
{  

$ur = $_POST['username'];
$pw = $_POST['password'];
$_SESSION['usernameS'] = $ur;
$_SESSION['passwordS'] = $pw;
$ur1 = $_SESSION['usernameS'];
$pw1 = $_SESSION['passwordS'];


    if(!empty($_SESSION['usernameS']) || !empty($_SESSION['passwordS']))
    { 
      $query = "SELECT userName,password,authority FROM registration WHERE userName='$ur1' AND password='$pw1'";
      $result = @mysql_query($query);
      @$row = mysql_fetch_array($result,MYSQL_NUM);
    
      $_SESSION['Authority'] = $row[2];


        

    
          if ($row[2] == 'admin')
          {
            echo "Welcome! ".$ur1."<br><br>";
            header("Location: adminpanel.php"); 
            exit();
          }
      
     
      
      elseif ($row[2] == 'user')
        {

        

        echo "Welcome! ".$ur1."<br><br>";
        header("Location: userpage.php"); 
        exit(); 
        }

      
     
      else {
        if($_SESSION['loginAttempt']==3){
          $_SESSION['blockInSeconds'] = 30;
          ?>

          <script>

            var myCounter = new Countdown({  
                seconds:<?php echo $_SESSION['blockInSeconds'];?>,  // number of seconds to count down
                onUpdateStatus: function(sec){
                  $('input').prop({disabled: true});
                  $('#blockSection>font').html("Please try again after " + sec + " second/s.");
                  <?php $_SESSION['blockInSeconds']--; ?>
                }, // callback for each second
                onCounterEnd: function(){ 
                  alert('unblocked');
                  $('input').prop({disabled: false});
                  $('#blockSection>font').html("");
                } // final action
            });
            myCounter.start();
          </script>

          <?php
        } else {
          echo "There's been an error when you were trying to login. <a href='login.php'>Please try again.</a>";        
          $_SESSION['loginAttempt']++; 
          $thisa = $_SESSION['loginAttempt']-1;
          echo "<script>alert('Login Attempt $thisa')</script>";         
        }
      } 

    }

    else {
        if($_SESSION['loginAttempt']==3){
          $_SESSION['blockInSeconds'] = 30;
          ?>

          <script>

            var myCounter = new Countdown({  
                seconds:<?php echo $_SESSION['blockInSeconds'];?>,  // number of seconds to count down
                onUpdateStatus: function(sec){
                  $('input').prop({disabled: true});
                  $('#blockSection>font').html("Please try again after " + sec + " second/s.");
                  <?php $_SESSION['blockInSeconds']--; ?>
                }, // callback for each second
                onCounterEnd: function(){ 
                  alert('unblocked');
                  $('input').prop({disabled: false});
                  $('#blockSection>font').html("");
                } // final action
            });
            myCounter.start();
          </script>

          <?php
        } else {
          echo "There's been an error when you were trying to login. <a href='login.php'>Please try again.</a>";        
          $_SESSION['loginAttempt']++; 
          $thisa = $_SESSION['loginAttempt']-1;
          echo "<script>alert('Login Attempt $thisa')</script>";         
        }
     } 
    

}



?>







 <table width='40%' border='0' bgcolor=#fff id='table1'>
    <form action='login.php' method='post'>

      <tr>
          <td style="text-align: center;" id="blockSection">
            <font color="#fff"></font>
          </td>
        </tr>
        <tr>
        
       
        <tr>
          <center>
            <td><img src='img2/123.png' height=20></td>
          <td align="center"><input type='text' name='username' size='20' placeholder='E-mail address' required></td>
    </tr>

    <tr>
          <center>
          <td align="center" colspan=2><hr></td>
    </tr>

        <tr>
          <center>
            <td><img src='img2/456.png' height=20></td>
          <td align="center"><input type='password' name='password' size='20' placeholder='Password' required></td>
        </tr>

        

        </table>

        <br>
        <table>

          <tr>
          <td>
            <center>
              
               <input type='submit' name='submit' value='Sign In' /></form></td>

        </tr>

        </table>






        <br><br><br><br>
         
        <center>


          <table border=0 width=100%>
            <tr>
              <td>
                <font size="2">
                  <center>
            <a href='forgotaccount.php'>Forgot password?</a>
                </font>
              </td>
              
              <td>
                <center>
                <font size="2">
            New here? <a href='registration.php'>Sign up</a>
                </font>
              </td>
            </tr>
          </table>



   
        <br><br><br>













</div>




</div>






</div>







  
</body> 
</html>
