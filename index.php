<?php

if(isset($_GET['city'])){
  $data = file_get_contents("https://www.weather-forecast.com/locations/".$_GET['city']."/forecasts/latest");
  
  $file = explode('<p class="large-loc">', $data);
  $file2 = explode('<<span class="current-local-time"></span>', $file[1]);
  $weather = $file2[0];
} 

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Wether Forcast</title>
  </head>

  <style type="text/css">
  	
  	*{

	font-family: sans-serif;
	margin: 0px;
	padding: 0px;
	margin-top: 70px;

}
body, html {

	background: none !important;
	background: url(bckg1.jpg) no-repeat center center fixed !important; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
}


.container{
	width: 500px;
	text-align: center;
}
.form-text{
	text-decoration-color: #4c76f5;
}
input[type=text] {
  width: 100%;
  padding: 10px 10px;
  
  box-sizing: border-box;
  text-align: center;
  font-size: 30;
  margin: 10px 0 10px 10px;
}



  </style>
  <body >

  	<div class="container">
      <div id="error"></div>
		<form method="GET">
			 	<div class="mb-4">
			   	<label  class="form-label" ><h1><strong>Enter Your City</strong></h1></label>
			    <input type="text"  id="cityName" class="form-control"  placeholder="City" name="city">
			    <div class="form-text ">  Enter the city name and Know About the Weather..</div>
				</div>
				<button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <div id="weather">
        <?php
          if ($weather != "") {
            echo $weather;
          } 
          
        ?>
        </div>
		</form>	   		

	    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
