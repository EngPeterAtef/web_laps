<?php
  // A class that defines a counter.
  class Counter
  {
    // Member Variables
    var $count = 0; // same as public, var is a PHP 4 compatibility feature
    var $startPoint = 0;


    // Methods
    function startCountAt($i)
    {
      $this->count = $i;
      $this->startPoint = $i;
    }    
  
    function increment()
    {
      $this->count++;
    }
    
    function reset()
    {
      $this->count = $this->startPoint;
    }

    function showvalue()
    {
      print $this->count;
    }
  }
?>    
