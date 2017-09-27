<?php

namespace ludovicm67\Strings\Tests;

use PHPUnit\Framework\TestCase;
use ludovicm67\Strings\Strings;

class StringsTest extends TestCase {

  public function testClean() {
    $this->assertEquals(
      'test&amp; &quot;&quot;~ &quot;@éa/-âå€ÊÂøÊ±æ€ûýþ&lt;b&gt;bold&lt;/b&gt;',
      Strings::clean('test& ""~ "@éa/-âå€ÊÂøÊ±æ€ûýþ<b>bold</b>')
    );
  }

  public function testFromCamelCase() {
    $this->assertEquals(
      'test-from-camel-case',
      Strings::fromCamelCase('testFromCamelCase')
    );
  }

  public function testToCamelCase() {
    $this->assertEquals(
      'testToCamelCase',
      Strings::toCamelCase('test-to-camel-case')
    );
  }

}
