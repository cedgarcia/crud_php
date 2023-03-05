<?php

class Validation {
  
  public static function sanitizeAndValidate($post) {
    $sanitizedData = [];
    // Loop through post data and sanitize each value
    foreach ($post as $key => $value) {
      $sanitizedValue = Sanitize::sanitizeString($value);
      $sanitizedValue = Sanitize::trimWhitespace($value);
      $sanitizedValue = Sanitize::removeMultipleSpaces($value);
      if (Sanitize::isEmptyString($string)) {

        
      } else {
      }
      // If value is an email, also validate it
      if ($key === 'email') {
        if (!Sanitize::validateEmail($sanitizedValue)) {
          return false;
        }
      }
      $sanitizedData[$key] = $sanitizedValue;
    }
    return $sanitizedData;
  }
  
}