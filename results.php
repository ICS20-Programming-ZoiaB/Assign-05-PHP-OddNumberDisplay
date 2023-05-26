<?php
// Initializing the numbers and message variable to an empty string
$numbers = "";
$message = "";

// Getting the user values for the minimum and maximum numbers
$minNumber = intval($_POST['min-number']);
$maxNumber = intval($_POST['max-number']);

// If statement checks to verify that user input is valid
if ((is_nan($minNumber) || is_nan($maxNumber)) || empty($_POST['min-number']) || empty($_POST['max-number'])) {
  $message = "Please enter valid numbers.";
}
// If minNumber > maxNumber (there is an error)
else if ($minNumber > $maxNumber) {
  $message = "Ensure that the starting number is less than or equal to the stopping number.";
}
// Else, generate the list of odd numbers based on user input
else {
  $reversed = isset($_POST['order']) && $_POST['order'] === 'reversed';
  
  if ($reversed) {
    $counter = $maxNumber;
    // Use while loop to generate the reversed list of odd numbers
    while ($counter >= $minNumber) {
      // if statement checks for odd numbers, provided that the condition in the while statement is true. It uses an operator that determines if there is a remainder when the number is divided by 2 (method taken from https://www.tutorialspoint.com/How-to-determine-if-a-number-is-odd-or-even-in-JavaScript)
      if ($counter % 2 !== 0) {
        $numbers .= $counter . "<br>";
      }
      $counter--;
    }
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