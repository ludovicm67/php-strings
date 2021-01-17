<?php

namespace ludovicm67\Strings;

/**
 * Strings is a class to manipulate strings easily
 */
class Strings {

  /**
   * Clean a string
   *
   * @param string $string the string to clean
   * @return string cleaned string
   */
  static function clean(string $string): string {
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

  /**
   * Unconvert a string from camelCase
   *
   * @param string $string the string to unconvert
   * @return string unconverted string
   */
  static function fromCamelCase(string $string): string {
    return strtolower(
      preg_replace(
        ['/([a-z\d])([A-Z])/', '/([^-])([A-Z][a-z])/'],
        '$1-$2',
        $string)
    );
  }

  /**
   * Convert a string to camelCase
   *
   * @param string $string the string to convert to camelCase
   * @return string string converted to camelCase
   */
  static function toCamelCase(string $string): string {
    return lcfirst(
      str_replace(' ', '', ucwords(
        str_replace('-', ' ', self::fromCamelCase($string))
      ))
    );
  }
}
