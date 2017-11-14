<?php
/**
 * $File: sql.php $
 * $Date: 2017-11-14 16:45:12 $
 * $Revision: $
 * $Creator: Jen-Chieh Shen $
 * $Notice: See LICENSE.txt for modification and distribution information
 *                   Copyright (c) 2017 by Shen, Jen-Chieh $
 */

namespace SSP;


/**
 * Sanitize the sql variable.
 *
 * @param { void* } var : any data type going to be sanitize.
 * @return { void* } : data been sanitize.
 */
function sql_sanitize($var) {
  if (function_exists("mysqli_real_escape_string")) {
    $var = mysqli_real_escape_string($var);
  } else {
    $var = addslashes($var);
  }
  return $var;
}

?>
