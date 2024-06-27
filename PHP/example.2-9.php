<!DOCTYPE HTML>
<html>
<head><title>Bottle Counter</title></head>
<body>
<?php
  include "counter.php";

  class BottleCounter extends Counter
  {
    // Add 12 bottles to the counter
    function addCase()
    {
      $this->count += 12;
    }

    // Return the number of cases to be shipped
    function caseCount()
    {
      return ceil($this->count / 12);
    }

    // A Constructor that sets the initial count
    function BottleCounter($startCount)
    {
      $this->count = $startCount;
    }
  }

  // Create a new object of type "BottleCounter"
  // and pass the initial count of 12
  $temp = new BottleCounter(12);

  // Increment the counter
  $temp->increment();

  // Add another Case
  $temp->addCase();

  // Print out the value of the counter: 24
  echo "<p>Counter is now: ";
  $temp->showvalue();

  // Print the number of cases
  $cases = $temp->caseCount();
  echo "<p>The number of cases to ship: $cases";
?>
</body></html>  

