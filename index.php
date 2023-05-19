<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Odd Number Display, PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
    <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-deep_orange.min.css" />
   
    <!-- Title -->
    <title>Odd Number Display, PHP</title>
  </head>
  <body>
    <?php echo "<h1>Odd Number Display, PHP</h1>"; ?>
  
    <!-- Header and text -->
    <?php
      echo "<p>Input a positive starting number and then a positive stopping number, and this webpage will give you all the odd numbers in between!.</p>";
      echo "<h3>Your Input:</h3>"; ?>
    
    <!-- Form for user input -->
    <form action="./results.php" method="post" target="results">
      <label for="min number">Number you would like the list to start at:
</label>
      <input type="number" step="1" name="min-number" placeholder="Minimum"><br><br>
      <label for="max number">Enter your stopping number:</label>
      <input type="number" step="1" name="max-number" placeholder="Maximum"><br><br>
      <input type="submit" value="Submit Numbers" id="submit-button" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
    </form>

    <!-- Iframe -->
    <br>
    <iframe id="results" name="results"></iframe>

    <!-- Image -->
    <br>
    <img src="./images/odd-number-chart.jpg" alt="Odd Numbers" length="400" width="400">
  </body>
</html>