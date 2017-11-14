<?php
/**
 * $File: jcs-util.php $
 * $Date: 2017-10-09 08:42:51 $
 * $Revision: $
 * $Creator: Jen-Chieh Shen $
 * $Notice: See LICENSE.txt for modification and distribution information
 *                   Copyright (c) 2017 by Shen, Jen-Chieh $
 */

namespace SSP;

/**
 * Write out the text with line break sign.
 */
function println($text) {
  echo $text . "<br/>";
}

function printlnColor($text, $color) {
  echo '<div style="color:'.$color.'">';
  println($text);
  echo '</div>';
}


/**
 * Check if the variable is set in system POST array.
 *
 * @param { string } var : variable name.
 * @return { bool } : true, isset. false, vice versa.
 */
function issetPost($var)
{
  return isset($_POST[$var]);
}

/**
 * Check if the variable is set in system GET array.
 *
 * @param { string } var : variable name.
 * @return { bool } : true, isset. false, vice versa.
 */
function issetGet($var) {
  return isset($_GET[$var]);
}

/**
 * Check if the variable is set in system SESSION array.
 *
 * @param { string } var : variable name.
 * @return { bool } : true, isset. false, vice versa.
 */
function issetSession($var) {
  return isset($_SESSION[$var]);
}

/**
 * Check if the variable is set in system GLOBALS array.
 *
 * @param { string } var : variable name.
 * @return { bool } : true, isset. false, vice versa.
 */
function issetGlobals($var) {
  return isset($GLOBALS[$var]);
}

/**
 * Get data from system $_POST array.
 */
function getPost($var) {
  return $_POST[$var];
}

/**
 * Get data from system $_GET array.
 */
function getGet($var) {
  return $_GET[$var];
}

/**
 * Get data from system $_SESSION array.
 */
function getSession($var) {
  return $_SESSION[$var];
}

/**
 * Get global vraibles.
 */
function getGlobals($var) {
  return $GLOBALS[$var];
}

/**
 * Safe way to get $_POST datra.
 */
function safeGetPost($var) {
  if (issetPost($var))
    return getPost($var);
  
  warning("POST data you trying to get is null... : " . $var);
  return NULL;
}

/**
 * Safe way to get $_GET datra.
 */
function safeGetGet($var) {
  if (issetGet($var))
    return getGet($var);

  warning("GET data you trying to get is null... : " . $var);
  return NULL;
}

/**
 * Safe way to get $_SESSION datra.
 */
function safeGetSession($var) {
  if (issetSession($var))
    return getSession($var);

  warning("SESSION data you trying to get is null... : " . $var);
  return NULL;
}

/**
 * Safe way to get $GLOBALS data.
 */
function safeGetGlobals($var) {
  if (issetGlobals($var))
    return getGlobals($var);

  warning("GLOBALS data you trying to get is null... : " . $var);
  return NULL;
}

?>
