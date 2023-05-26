<?php
// Initializing the numbers and message variable to an empty string
$numbers = "";
$message = "";

// Getting the user values for the minimum and maximum numbers
$minNumber = intval($_POST['min-number']);
$maxNumber = intval($_POST['max-number']);

// If statement checks to verify that user input is valid using is_numeric (method from: https://www.w3schools.com/php/func_va r_is_numeric.asp)
if (!is_numeric($minNumber) || !is_numeric($maxNumber)) {
  $message = "Please enter valid numbers.";
}
  
// If minNumber > maxNumber (there is an error)
else if ($minNumber > $maxNumber) {
  $message = "Ensure that the starting number is less than or equal to the stopping number.";
}
  
// Else, generate the list of odd numbers based on user input. 
else {
  
  //Gets result of which radio button to determine whether list of odd numbers should be reversed or not using "isset" (method taken from: https://www.simplilearn.com/tutorials/php-tutorial/isset-inphp#:~:text=The%20isset()%20function%20dete rmines,%3B%20else%2C%20it%20returns%20FALSE.)
  $reversed = isset($_POST['order']) && $_POST['order'] === 'reversed';
  
  if ($reversed) {
    $counter = $maxNumber;
    // Use while loop to spefify range to generate the reversed list of odd numbers
    do {
         // if statement checks for odd numbers, provided that the condition in the while statement is true. It uses an operator that determines if there is a remainder when the number is divided by 2 (method taken from https://www.tutorialspoint.com/How-to-determine-if-a-number-is-odd-or-even-in-JavaScript)
      if ($counter % 2 !== 0) {
        $numbers .= $counter . "<br>";
      }
      $counter = $counter - 1;
      //while counter is bigger than or equal to minimum
    } while ($counter >= $minNumber);
    $message = "Here are all the odd numbers between your selected numbers:<br><br>" . $numbers;
  }
  
  else {
    // Use while loop to generate the normal list of odd numbers in regular order
    $counter = $minNumber;
    while ($counter <= $maxNumber) {
      if ($counter % 2 !== 0) {
        $numbers .= $counter . "<br>";
      }
      $counter++;
    }
  }
  
  $message = "Here are all the odd numbers between your selected numbers:<br><br>" . $numbers;
}

// Display the results (the range of odd numbers) back to the user
echo $message;
?>