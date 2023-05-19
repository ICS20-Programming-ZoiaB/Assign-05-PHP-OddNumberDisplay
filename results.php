<?php
  //initializing the numbers and message variable to an empty string
  $numbers = "";
  $message = "";

  //getting the user values for the minimum and maximum numbers
  $minNumber = intval($_POST['min-number']);
  $maxNumber = intval($_POST['max-number']);

  //initializing the counter variable to the minNumber
  $counter = $minNumber;

  //If statement checks to verify that user input is valid
  if ((is_nan($minNumber) || is_nan($maxNumber)) || empty($_POST['min-number']) || empty($_POST['max-number'])) {
  $message = "Please enter valid numbers.";
}

  // if statement checks if either number is negative
  else if ($minNumber < 0 || $maxNumber < 0) {
    $message = "Enter positive integers for both the minimum and maximum.";
  }

  // if statement checks if minNumber > maxNumber (there is an error)
  else if ($minNumber > $maxNumber) {
    $message = "Ensure that the minimum is less than or equal to the maximum.";
  }

  //else, complete while loop to create list of even numbers between min and max
  else {
    //while loop that specifies the range
    while (($counter >= $minNumber) && ($counter <= $maxNumber)) {
      //if statement checks for even numbers; it uses a line of code that makes sure that the remainder is 1 when the number is divided by 2.
      if (($counter <= $maxNumber) && ($counter % 2 == 1)) {
        $numbers = $numbers . $counter . "<br>";
      }
      $counter = $counter + 1;
      $message = "Here are all the odd numbers between your selected numbers:<br><br>$numbers";
    }
  }

  //displaying the results (the range of even numbers) back to the user
  echo "$message";
?>