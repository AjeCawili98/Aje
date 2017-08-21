<?php session_start(); include("sql-phpcnc.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <link href="css/css1.css" rel="stylesheet" type="text/css" />

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Polylines</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #origin-input{
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-top: 60px;
        margin-left: -105px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
      }


      
      #destination-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-top: 95px;
        margin-left: -200px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
      }


      #origin-input:focus,
      #destination-input:focus {
        border-color: #4d90fe;
      }

      #mode-selector {
        color: #fff;
        background-color: #4d90fe;
        margin-top: 150px;
        margin-left: -200px;
        padding: 5px 11px 0px 11px;
      }

      #mode-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

    </style>
  </head>
  <body>


    <div id="header">
  
<nav>
  <a href="#" id="menu-icon"></a>

  <ul>
   

  
 <li><a href="useraccount.php">My Account</a></li>


  <li><a href="logout.php" id="current">Logout</a></li>





  </ul>
</nav>
</div>





























<br><br><br>


<?php

if(!empty($_SESSION["usernameS"]) || !empty($_SESSION["passwordS"]))
    {
      if($_SESSION["Authority"] == "user")
      {




date_default_timezone_set('Asia/Manila');

$time1 = date('G:i:s');





$a1 = mysql_query("SELECT * FROM loc1 where lid='1'");
$rowa1 = mysql_fetch_array($a1);


$time123 = strtotime("$time1");

$time456a1 = strtotime("$rowa1[2]");

$time789a1 = strtotime("$rowa1[3]");

$time456a2 = strtotime("$rowa1[4]");

$time789a2 = strtotime("$rowa1[5]");



$b1 = mysql_query("SELECT * FROM loc1 where lid='2'");
$rowb1 = mysql_fetch_array($b1);



$time456b1 = strtotime("$rowb1[2]");

$time789b1 = strtotime("$rowb1[3]");

$time456b2 = strtotime("$rowb1[4]");

$time789b2 = strtotime("$rowb1[5]");




$c1 = mysql_query("SELECT * FROM loc1 where lid='3'");
$rowc1 = mysql_fetch_array($c1);



$time456c1 = strtotime("$rowc1[2]");

$time789c1 = strtotime("$rowc1[3]");

$time456c2 = strtotime("$rowc1[4]");

$time789c2 = strtotime("$rowc1[5]");



$d1 = mysql_query("SELECT * FROM loc1 where lid='4'");
$rowd1 = mysql_fetch_array($d1);



$time456d1 = strtotime("$rowd1[2]");

$time789d1 = strtotime("$rowd1[3]");

$time456d2 = strtotime("$rowd1[4]");

$time789d2 = strtotime("$rowd1[5]");




$e1 = mysql_query("SELECT * FROM loc1 where lid='5'");
$rowe1 = mysql_fetch_array($e1);



$time456e1 = strtotime("$rowe1[2]");

$time789e1 = strtotime("$rowe1[3]");

$time456e2 = strtotime("$rowe1[4]");

$time789e2 = strtotime("$rowe1[5]");





$f1 = mysql_query("SELECT * FROM loc1 where lid='6'");
$rowf1 = mysql_fetch_array($f1);



$time456f1 = strtotime("$rowf1[2]");

$time789f1 = strtotime("$rowf1[3]");

$time456f2 = strtotime("$rowf1[4]");

$time789f2 = strtotime("$rowf1[5]");





$g1 = mysql_query("SELECT * FROM loc1 where lid='7'");
$rowg1 = mysql_fetch_array($g1);



$time456g1 = strtotime("$rowg1[2]");

$time789g1 = strtotime("$rowg1[3]");

$time456g2 = strtotime("$rowg1[4]");

$time789g2 = strtotime("$rowg1[5]");



$h1 = mysql_query("SELECT * FROM loc1 where lid='8'");
$rowh1 = mysql_fetch_array($h1);



$time456h1 = strtotime("$rowh1[2]");

$time789h1 = strtotime("$rowh1[3]");

$time456h2 = strtotime("$rowh1[4]");

$time789h2 = strtotime("$rowh1[5]");




$i1 = mysql_query("SELECT * FROM loc1 where lid='9'");
$rowi1 = mysql_fetch_array($i1);



$time456i1 = strtotime("$rowi1[2]");

$time789i1 = strtotime("$rowi1[3]");

$time456i2 = strtotime("$rowi1[4]");

$time789i2 = strtotime("$rowi1[5]");







$k1 = mysql_query("SELECT * FROM loc1 where lid='11'");
$rowk1 = mysql_fetch_array($k1);



$time456k1 = strtotime("$rowk1[2]");

$time789k1 = strtotime("$rowk1[3]");

$time456k2 = strtotime("$rowk1[4]");

$time789k2 = strtotime("$rowk1[5]");



$l1 = mysql_query("SELECT * FROM loc1 where lid='12'");
$rowl1 = mysql_fetch_array($l1);



$time456l1 = strtotime("$rowl1[2]");

$time789l1 = strtotime("$rowl1[3]");

$time456l2 = strtotime("$rowl1[4]");

$time789l2 = strtotime("$rowl1[5]");




$m1 = mysql_query("SELECT * FROM loc1 where lid='13'");
$rowm1 = mysql_fetch_array($m1);



$time456m1 = strtotime("$rowm1[2]");

$time789m1 = strtotime("$rowm1[3]");

$time456m2 = strtotime("$rowm1[4]");

$time789m2 = strtotime("$rowm1[5]");




$n1 = mysql_query("SELECT * FROM loc1 where lid='14'");
$rown1 = mysql_fetch_array($n1);



$time456n1 = strtotime("$rown1[2]");

$time789n1 = strtotime("$rown1[3]");

$time456n2 = strtotime("$rown1[4]");

$time789n2 = strtotime("$rown1[5]");




$o1 = mysql_query("SELECT * FROM loc1 where lid='15'");
$rowo1 = mysql_fetch_array($o1);



$time456o1 = strtotime("$rowo1[2]");

$time789o1 = strtotime("$rowo1[3]");

$time456o2 = strtotime("$rowo1[4]");

$time789o2 = strtotime("$rowo1[5]");



$p1 = mysql_query("SELECT * FROM loc1 where lid='16'");
$rowp1 = mysql_fetch_array($p1);



$time456p1 = strtotime("$rowp1[2]");

$time789p1 = strtotime("$rowp1[3]");

$time456p2 = strtotime("$rowp1[4]");

$time789p2 = strtotime("$rowp1[5]");







echo"
    <input id='origin-input' class='controls' type='text'
        placeholder='Enter an origin location'>

    <input id='destination-input' class='controls' type='text'
        placeholder='Enter a destination location'>


    <div id='mode-selector' class='controls'>
      <input type='radio' name='type' id='changemode-walking' checked='checked'>
      <label for='changemode-walking'>Walking</label>

      <input type='radio' name='type' id='changemode-transit'>
      <label for='changemode-transit'>Transit</label>

      <input type='radio' name='type' id='changemode-driving'>
      <label for='changemode-driving'>Driving</label>
    </div>




    <div id='map'></div>
    <script>


      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: {lat: 14.5924978, lng: 121.02829810000003},
          mapTypeId: 'terrain'
        });

        var bulebarShawCoord = [
          $rowa1[1]

        ];
        var bbsCoordPath = new google.maps.Polyline({
          path: bulebarShawCoord,
          geodesic: true,
          ";

         

          if($time456a1<=$time123 && $time123<=$time789a1)
          {
          echo"
          strokeColor: '$rowa1[6]',
          ";
          }

          else
          {
            
            if($time456a2<=$time123 && $time123<=$time789a2)
            {
            echo"
            strokeColor: '$rowa1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });









        var bulebarShawCoord2 = [
          $rowb1[1]

        ];
        var bbsCoordPath2 = new google.maps.Polyline({
          path: bulebarShawCoord2,
          geodesic: true,
          ";

         

          if($time456b1<=$time123 && $time123<=$time789b1)
          {
          echo"
          strokeColor: '$rowb1[6]',
          ";
          }

          else
          {
            
            if($time456b2<=$time123 && $time123<=$time789b2)
            {
            echo"
            strokeColor: '$rowb1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });





        


        var bulebarShawCoord3 = [
          $rowc1[1]

        ];
        var bbsCoordPath3 = new google.maps.Polyline({
          path: bulebarShawCoord3,
          geodesic: true,
          ";

         

          if($time456c1<=$time123 && $time123<=$time789c1)
          {
          echo"
          strokeColor: '$rowc1[6]',
          ";
          }

          else
          {
            
            if($time456c2<=$time123 && $time123<=$time789c2)
            {
            echo"
            strokeColor: '$rowc1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });





  


        var bulebarShawCoord4 = [
          $rowd1[1]

        ];
        var bbsCoordPath4 = new google.maps.Polyline({
          path: bulebarShawCoord4,
          geodesic: true,
          ";

         

          if($time456d1<=$time123 && $time123<=$time789d1)
          {
          echo"
          strokeColor: '$rowd1[6]',
          ";
          }

          else
          {
            
            if($time456d2<=$time123 && $time123<=$time789d2)
            {
            echo"
            strokeColor: '$rowd1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });










        var bulebarShawCoord5 = [
          $rowe1[1]

        ];
        var bbsCoordPath5 = new google.maps.Polyline({
          path: bulebarShawCoord5,
          geodesic: true,
          ";

         

          if($time456e1<=$time123 && $time123<=$time789e1)
          {
          echo"
          strokeColor: '$rowe1[6]',
          ";
          }

          else
          {
            
            if($time456e2<=$time123 && $time123<=$time789e2)
            {
            echo"
            strokeColor: '$rowe1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'red',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });











        var bulebarShawCoord6 = [
          $rowf1[1]

        ];
        var bbsCoordPath6 = new google.maps.Polyline({
          path: bulebarShawCoord6,
          geodesic: true,
          ";

         

          if($time456f1<=$time123 && $time123<=$time789f1)
          {
          echo"
          strokeColor: '$rowf1[6]',
          ";
          }

          else
          {
            
            if($time456f2<=$time123 && $time123<=$time789f2)
            {
            echo"
            strokeColor: '$rowf1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });









        var bulebarShawCoord7 = [
          $rowg1[1]

        ];
        var bbsCoordPath7 = new google.maps.Polyline({
          path: bulebarShawCoord7,
          geodesic: true,
          ";

         

          if($time456g1<=$time123 && $time123<=$time789g1)
          {
          echo"
          strokeColor: '$rowg1[6]',
          ";
          }

          else
          {
            
            if($time456g2<=$time123 && $time123<=$time789g2)
            {
            echo"
            strokeColor: '$rowg1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });











        var bulebarShawCoord8 = [
          $rowh1[1]

        ];
        var bbsCoordPath8 = new google.maps.Polyline({
          path: bulebarShawCoord8,
          geodesic: true,
          ";

         

          if($time456h1<=$time123 && $time123<=$time789h1)
          {
          echo"
          strokeColor: '$rowh1[6]',
          ";
          }

          else
          {
            
            if($time456h2<=$time123 && $time123<=$time789h2)
            {
            echo"
            strokeColor: '$rowh1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });




        



        var bulebarShawCoord9 = [
          $rowi1[1]

        ];
        var bbsCoordPath9 = new google.maps.Polyline({
          path: bulebarShawCoord9,
          geodesic: true,
          ";

         

          if($time456i1<=$time123 && $time123<=$time789i1)
          {
          echo"
          strokeColor: '$rowi1[6]',
          ";
          }

          else
          {
            
            if($time456i2<=$time123 && $time123<=$time789i2)
            {
            echo"
            strokeColor: '$rowi1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });










        





        var bulebarShawCoord11 = [
          $rowk1[1]

        ];
        var bbsCoordPath11 = new google.maps.Polyline({
          path: bulebarShawCoord11,
          geodesic: true,
          ";

         

          if($time456k1<=$time123 && $time123<=$time789k1)
          {
          echo"
          strokeColor: '$rowk1[6]',
          ";
          }

          else
          {
            
            if($time456k2<=$time123 && $time123<=$time789k2)
            {
            echo"
            strokeColor: '$rowk1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });








        var bulebarShawCoord12 = [
          $rowl1[1]

        ];
        var bbsCoordPath12 = new google.maps.Polyline({
          path: bulebarShawCoord12,
          geodesic: true,
          ";

         

          if($time456l1<=$time123 && $time123<=$time789l1)
          {
          echo"
          strokeColor: '$rowl1[6]',
          ";
          }

          else
          {
            
            if($time456l2<=$time123 && $time123<=$time789l2)
            {
            echo"
            strokeColor: '$rowl1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });







        var bulebarShawCoord13 = [
          $rowm1[1]

        ];
        var bbsCoordPath13 = new google.maps.Polyline({
          path: bulebarShawCoord13,
          geodesic: true,
          ";

         

          if($time456m1<=$time123 && $time123<=$time789m1)
          {
          echo"
          strokeColor: '$rowm1[6]',
          ";
          }

          else
          {
            
            if($time456m2<=$time123 && $time123<=$time789m2)
            {
            echo"
            strokeColor: '$rowm1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });



        





        var bulebarShawCoord14 = [
          $rown1[1]

        ];
        var bbsCoordPath14 = new google.maps.Polyline({
          path: bulebarShawCoord14,
          geodesic: true,
          ";

         

          if($time456n1<=$time123 && $time123<=$time789n1)
          {
          echo"
          strokeColor: '$rown1[6]',
          ";
          }

          else
          {
            
            if($time456n2<=$time123 && $time123<=$time789n2)
            {
            echo"
            strokeColor: '$rown1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });






        var bulebarShawCoord15 = [
          $rowo1[1]

        ];
        var bbsCoordPath15 = new google.maps.Polyline({
          path: bulebarShawCoord15,
          geodesic: true,
          ";

         

          if($time456o1<=$time123 && $time123<=$time789o1)
          {
          echo"
          strokeColor: '$rowo1[6]',
          ";
          }

          else
          {
            
            if($time456o2<=$time123 && $time123<=$time789o2)
            {
            echo"
            strokeColor: '$rowo1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });
        

        





        var bulebarShawCoord16 = [
          $rowp1[1]

        ];
        var bbsCoordPath16 = new google.maps.Polyline({
          path: bulebarShawCoord16,
          geodesic: true,
          ";

         

          if($time456p1<=$time123 && $time123<=$time789p1)
          {
          echo"
          strokeColor: '$rowp1[6]',
          ";
          }

          else
          {
            
            if($time456p2<=$time123 && $time123<=$time789p2)
            {
            echo"
            strokeColor: '$rowp1[7]',
            ";
            }

            else
            {
            echo"
            strokeColor: 'green',
            ";
            }


          }



          echo"
          strokeOpacity: 1.0,
          strokeWeight: 5
        });





        

        





        





        bbsCoordPath.setMap(map);
        bbsCoordPath2.setMap(map);
        bbsCoordPath3.setMap(map);
        bbsCoordPath4.setMap(map);
        bbsCoordPath5.setMap(map);
        bbsCoordPath6.setMap(map);
        bbsCoordPath7.setMap(map);
        bbsCoordPath8.setMap(map);
        bbsCoordPath9.setMap(map);
        
        bbsCoordPath11.setMap(map);
        bbsCoordPath12.setMap(map);
        bbsCoordPath13.setMap(map);
        bbsCoordPath14.setMap(map);
        bbsCoordPath15.setMap(map);
        bbsCoordPath16.setMap(map);
        

        new AutocompleteDirectionsHandler(map);
      }

      function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'WALKING';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        var modeSelector = document.getElementById('mode-selector');
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, {placeIdOnly: true});
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, {placeIdOnly: true});

        this.setupClickListener('changemode-walking', 'WALKING');
        this.setupClickListener('changemode-transit', 'TRANSIT');
        this.setupClickListener('changemode-driving', 'DRIVING');

        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
      AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
        var radioButton = document.getElementById(id);
        var me = this;
        radioButton.addEventListener('click', function() {
          me.travelMode = mode;
          me.route();
        });
      };

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert('Please select an option from the dropdown list.');
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };









    </script>
    <script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC26n_fOSsKHsB_S1tNtZ4dOswwOX5aEvA&libraries=places&callback=initMap'>
    </script>

";




}
}

    else { header("Location: index.php"); }


?>


  </body>
</html>