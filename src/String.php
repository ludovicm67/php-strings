<?php

namespace ludovicm67\String;

class String {

  // Clean a string
  static function clean($string) {
    return stripslashes(
      trim(
        htmlspecialchars(
          addslashes(
            html_entity_decode($string)
          )
        )
      )
    );
  }

  // Unconvert a string from camelCase
  static function fromCamelCase($string) {
    return strtolower(
      preg_replace(
        ['/([a-z\d])([A-Z])/', '/([^-])([A-Z][a-z])/'],
        '$1-$2',
        $string)
    );
  }

  // Convert a string to camelCase
  static function toCamelCase($string) {
    return lcfirst(
      str_replace(' ', '', ucwords(
        str_replace('-', ' ', self::fromCamelCase($string))
      ))
    );
  }
}
