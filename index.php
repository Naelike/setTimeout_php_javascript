<?php
  function setTimeout($fn, $timeout){
      sleep(($timeout/1000));
      $fn();
  }

  $someFunctionToExecute = function() {
      echo 'The function executed!';
  }

  setTimeout($someFunctionToExecute, 3000);
?>
