
<?php $outputString = "Hello, world"; 
  function addSeven($x) {
    echo $GLOBALS['outputString'];
    // end line
    echo "<br>";
    echo $x;
    // end line
    echo "<br>";
    $x = $x + 7;
    return $x;
  }
  // echo addSeven(2);
  // echo "<br>";
  function testStatic() {
    static $x = 0;
    echo $x;
    // end line
    echo "<br>";
    $x++;
  }
  testStatic();
  testStatic();
  testStatic();
?>
<!DOCTYPE HTML>
<html>
<head>
  <title><?= $outputString; ?></title>
</head>
<body>
  <?php echo "<h1>".$outputString."</h1>"; #concatinate
  ?> 
  <?php echo "<h1>",$outputString,"</h1>"; ?>
  <?php echo "<h1> $outputString </h1>"; ?>
  <h1><?= $outputString; ?></h1>
</body>
</html>  
