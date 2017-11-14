<!--
   - $File: test.php $
   - $Date: 2017-10-09 13:41:26 $
   - $Revision: $
   - $Creator: Jen-Chieh Shen $
   - $Notice: See LICENSE.txt for modification and distribution information
   -                   Copyright (c) 2017 by Shen, Jen-Chieh $
-->

<?php
include("../src/ssp.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Test Webpage</title>
  </head>
  <body>

    <?php
    if (false) {
    ?>
      True statment.
    <?php
    } else {
    ?>
      False statment.
    <?php
    }

    
    
    SSP\println("Hello World Cool dude");
    SSP\println("Hello World Cool dude");
    
    SSP\safeGetSession('Hello');

    SSP\error('some error.');
    SSP\log('some log.');
    
    ?>
    
  </body>
</html>
