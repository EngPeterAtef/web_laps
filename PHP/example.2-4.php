<!DOCTYPE HTML PUBLIC>
<html>
<head>
  <title>Multi-dimensional arrays</title>
</head>
<body>
<h2>A two dimensional array</h2>
<?php

  // A two dimensional array using integer indexes
  $planets = array(array("Mercury", 0.39, 0.38),
                   array("Venus", 0.72, 0.95),
                   array("Earth", 1.0, 1.0),
                   array("Mars", 1.52, 0.53) );

  // prints "Earth"
  print $planets[2][0]
?>

<h2>More sophisticated multi-dimensional array</h2>
<?php

  // More sophisticated multi-dimensional array
  $planets2 = array(
    "Mercury"=> array("dist"=>0.39, "dia"=>0.38),
    "Venus"  => array("dist"=>0.39, "dia"=>0.95),
    "Earth"  => array("dist"=>1.0,  "dia"=>1.0,
                  "moons"=>array("Moon")),
    "Mars"   => array("dist"=>0.39, "dia"=>0.53,
                  "moons"=>array("Phobos", "Deimos")),
  );

  // prints "Moon"
  // print $planets2["Earth"]["moons"][0];
  // loop over $planets2 array
  foreach($planets2 as $k => $v) {
    print "<p>$k: ";
    // loop over $v array
    foreach($v as $k2 => $v2) {
      // check if $v2 is an array
      if (is_array($v2)) {
        print "$k2: ";
        // loop over $v2 array
        foreach($v2 as $k3 => $v3) {
          print "$v3 ";
        }
      }
      else{
        print "$k2=$v2 ";
      }
    }
    print "</p>";
  }
?>
</body>
</html>  