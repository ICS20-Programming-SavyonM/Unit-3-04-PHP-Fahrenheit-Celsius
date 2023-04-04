<!DOCTYPE html>
<html>
  <head>
    <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to celsius, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--For favicon on this page-->
     <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Fahrenheit to Celsius Converter</title>
  </head>
  <body>
    <!--enter value needed-->
    <h1>Fahrenheit to Celsius Converter</h1>
    <form method="POST">
      <p>Enter the temperature in Fahrenheit:</p>
      <input type="text" name="fahrenheit">
      <button type="submit">Convert</button>
      <?php
        // Check if the form has been submitted
        if (isset($_POST['fahrenheit'])) {
          // Get the Fahrenheit value from the form
          $fahrenheit = $_POST['fahrenheit'];

          // Convert the Fahrenheit value to Celsius and round to 2 decimal places
          $celsius = round(($fahrenheit - 32) * 5 / 9, 2);

          // Display the result to the user
          echo "<p>$fahrenheit ° Fahrenheit is $celsius ° Celsius.</p>";
        }
      ?>
    </form>
     <!--For image-->
   <br></br>
	<img src="./images/celsiusconvert.jpg" alt="sphere" width="300" height="115"/>
  </body>
</html>