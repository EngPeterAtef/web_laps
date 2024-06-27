<!DOCTYPE HTML>
<html>
<head>
  <title>Examples of using printf()</title>
</head>
<body>
<h1>Examples of using printf()</h1>
<pre>
<?php
  // Outputs "3.14"
  printf("%.2f\n", 3.14159);

  // Outputs "      3.14"
  printf("%10.2f\n", 3.14159);

  // Outputs "3.1415900000"
  printf("%.10f\n", 3.14159);

  // Outputs "halfofthe"
  printf("%.9s\n", "halfofthestring");

  // Outputs "    3.14 3.141590       3.142"
  printf("%5.2f %f %7.3f\n", 3.14159, 3.14159, 3.14159);

  // Outputs "1111011 123 123.000000 test"
  printf("%b %d %f %s\n", 123, 123, 123, "test");
?>
</pre>
</body>
</html>  
