<?php

class Validation {
  
  public static function sanitizeAndValidate($post) {
    $sanitizedData = [];
    // Loop through post data and sanitize each value
    foreach ($post as $key => $value) {
      $sanitizedValue = Sanitize::sanitizeString($value);
      
      if (Sanitize::isEmptyString($string)) {
        echo "The string is empty.";
      } else {
        echo "The string is not empty.";
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