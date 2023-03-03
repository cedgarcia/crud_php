<?php

class Sanitize {
  public static function sanitizeString($string) {
    // Remove tags and whitespace from beginning and end of string
    $string = trim(strip_tags($string));
    // Remove slashes that were added to escape quotes
    $string = stripslashes($string);
    // Convert special characters to HTML entities
    $string = htmlentities($string, ENT_QUOTES, 'UTF-8');
    return $string;
  }
  // If empty string
  public static function isEmptyString($string) {
    if (empty($string)) {
      return true;
    } else {
      return false;
    }
  }
  public static function validateEmail($email) {
    // Remove tags and whitespace from beginning and end of email
    $email = trim(strip_tags($email));
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return false;
    }
    return true;
  }

}