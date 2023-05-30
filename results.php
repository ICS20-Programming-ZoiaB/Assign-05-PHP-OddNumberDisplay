<?php
// Initializing the numbers and message variables to an empty string
$numbers = "";
$message = "";

// Getting the user values for the minimum and maximum numbers
$minNumber = $_POST['min-number'];
$maxNumber = $_POST['max-number'];

//if: if user does not enter input or if invalid input is entered, tell user to enter valid numbers. Using is_numeric (method from: https://www.w3schools.com/php/func_va r_is_numeric.asp)
if (!is_numeric($minNumber) || !is_numeric($maxNumber)) {
  $message = "Please enter valid numbers.";
}
  
//else if: otherwise, if minimum (starting) number is greater than maximum (stopping) number, tell user to ensure that the starting number is less than or equal to the stopping number
else if ($minNumber > $maxNumber) {
  $message = "Ensure that the starting number is less than or equal to the stopping number.";
}
  
//else, complete a loop to display list of odd numbers
else {
  
  //Determines which radio button is checked to determine whether list of odd numbers should be reversed or not using "isset" (method taken from: https://www.simplilearn.com/tutorials/php-tutorial/isset-inphp#:~:text=The%20isset()%20function%20dete rmines,%3B%20else%2C%20it%20returns%20FALSE.)
  $reversed = isset($_POST['order']) && $_POST['order'] === 'reversed';
  if ($reversed) {
    $counter = $maxNumber;
    //Do while loop to display list of odd numbers in reverse
    do {
      // if statement checks for odd numbers. It uses an operator that determines if there is a remainder when the number is divided by 2 (method taken from https://www.tutorialspoint.com/How-to-determine-if-a-number-is-odd-or-even-in-JavaScript)
      if ($counter % 2 !== 0) {
        $numbers .= $counter . "<br>";
      }
      $counter = $counter - 1;
    } while ($counter >= $minNumber);
    $message = "Here are all the odd numbers between your selected numbers:<br><br>" . $numbers;
  }

   // else, complete while loop to create list of odd numbers between minimum (starting) number and maximum (stopping) number in regular order
  else {
    $counter = $minNumber;
    while ($counter <= $maxNumber) {
      // if statement checks for odd numbers. It uses an operator that determines if there is a remainder when the number is divided by 2 (method taken from https://www.tutorialspoint.com/How-to-determine-if-a-number-is-odd-or-even-in-JavaScript)
      if ($counter % 2 !== 0) {
        $numbers .= $counter . "<br>";
      }
      $counter++;
    }
  }

  //Set message variable equal to the list of odd numbers
  $message = "Here are all the odd numbers between your selected numbers:<br><br>" . $numbers;
}

// Display the results (the range of odd numbers) back to the user
echo $message;
?>