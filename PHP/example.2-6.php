<!DOCTYPE HTML>
<html>
<head>
  <title>Simple Function Call</title>
</head>
<body>
<?php

function bold($string)
{
  echo "<b>" . $string . "</b>\n";
}

// First example function call (with a static string)
echo "this is not bold\n";
bold("this is bold");
echo "this is again not bold\n";

// Second example function call (with a variable)
$myString = "this is bold";
bold($myString);
?>
</body></html>  
