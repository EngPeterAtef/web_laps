<!DOCTYPE HTML>
<html>
<head><title>Counter</title></head>
<body>
<?php
  include "counter.php";

  // Create a new object of type "counter"
  $temp = new Counter;

  // Set the counter to 10
  $temp->startCountAt(10);

  // Increment the counter
  $temp->increment();
  $temp->increment();
  $temp->increment();

  // Print out the value of the counter
  echo "<p>Counter is now: ";
  $temp->showvalue();

  // Reset the counter
  $temp->reset();

  // Print out the value of the counter
  echo "<p>Counter is now: ";
  $temp->showvalue();
?>
</body></html>  