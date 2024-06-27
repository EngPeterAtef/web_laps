<!DOCTYPE HTML>
<html>
<head>
  <title>The Times-Tables</title>
</head>
<body>
<h1>The Times Tables</h1>
<?php

  // Go through each table
  for ($table = 1; $table < 13; $table++) {  
    echo "<p><b>The " . $table . " Times Table</b>\n";

    // Produce 12 lines for each table
    for ($counter = 1; $counter < 13; $counter++) {
      $answer = $table * $counter;

      // Is this an even-number counter?
      if ($counter % 2 == 0) {
        // Yes, so print this line in bold
        echo "<br><b>$counter x $table = $answer</b><br>";
      } else {
        // No, so print this in normal face
        echo "<br>$counter x $table = $answer<br>";
      }
    }
    echo "</p>"; // Close the paragraph after each table
  }

?>
</body>
</html>  
