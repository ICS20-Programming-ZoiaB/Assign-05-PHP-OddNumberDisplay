<?php
  //initializing the numbers and message variable to an empty string
  $numbers = "";
  $message = "";

  //getting the user values for the minimum and maximum numbers
  $minNumber = intval($_POST['min-number']);
  $maxNumber = intval($_POST['max-number']);

  //If statement checks to verify that user input is valid
  if ((is_nan($minNumber) || is_nan($maxNumber)) || empty($_POST['min-number']) || empty($_POST['max-number'])) {
  $message = "Please enter valid numbers.";
}

  // if statement checks if minNumber > maxNumber (there is an error)
  else if ($minNumber > $maxNumber) {
    $message = "Ensure that the starting number is less than or equal to the stopping number.";
  }

  //else, complete do while loop to create a reversed list of odd numbers between min and max
  // Else, complete the while loop to create list of the even numbers
  else {
    if (isset($_POST['reversed']) && $_POST['reversed'] == 'reversed') {
      $counter = $maxNumber;
      do {
         // if statement checks for odd numbers, provided that the condition in the while statement is true. It uses an operator that determines if there is a remainder when the number is divided by 2 (method taken from https://www.tutorialspoint.com/How-to-determine-if-a-number-is-odd-or-even-in-JavaScript)
        if ($counter % 2 !== 0) {
          $numbers .= $counter . "<br>";
        }
        $counter = $counter - 1;
        //while loop specifies range
      } while ($counter >= $minNumber);
      $message = "Here are all the odd numbers between your selected numbers:<br><br>" . $numbers;
    }
      
  // else, complete while loop to create list of odd numbers between min and max
  else {
      $counter = $minNumber;
      while ($counter <= $maxNumber) {
        if ($counter % 2 !== 0) {
          $numbers = $numbers . $counter . "<br>";
        }
        $counter++;
      }
      $message = "Here are all the odd numbers between your selected numbers:<br><br>" . $numbers;
    }
  }


  //displaying the results (the range of even numbers) back to the user
  echo "$message";
?>