Strings
=======

> Some useful functions for working with strings

[![Latest Stable Version](https://poser.pugx.org/ludovicm67/strings/v/stable)](https://packagist.org/packages/ludovicm67/strings)
[![Total Downloads](https://poser.pugx.org/ludovicm67/strings/downloads)](https://packagist.org/packages/ludovicm67/strings)
[![Build Status](https://travis-ci.org/ludovicm67/php-strings.svg?branch=master)](https://travis-ci.org/ludovicm67/php-strings)
[![Coverage Status](https://coveralls.io/repos/github/ludovicm67/php-strings/badge.svg?branch=master)](https://coveralls.io/github/ludovicm67/php-strings?branch=master)
[![License](https://poser.pugx.org/ludovicm67/strings/license)](https://packagist.org/packages/ludovicm67/strings)

## Installation

Just run the following command: `composer require ludovicm67/strings`
to add it to your PHP project!

## Getting started

If you installed using composer, you can now create a file with the following code:

```php
<?php

// import here the composer autoloader
require('./vendor/autoload.php');

// use the namespace for this library
use ludovicm67\Strings\Strings;


```

### clean strings

You can clean strings using the static method: `Strings::clean("My string")`.

Example:

```php

echo Strings::clean("test& ""~ "@éa/-âå€ÊÂøÊ±æ€ûýþ<b>bold</b>");
// will display: test&amp; &quot;&quot;~ &quot;@éa/-âå€ÊÂøÊ±æ€ûýþ&lt;b&gt;bold&lt;/b&gt;

```

### get a string from camelCase

Using `Strings::fromCamelCase("myString")` (*will return: `my-string`*).

Example:

```php

echo Strings::fromCamelCase('testFromCamelCase');
// will display: test-from-camel-case

```

### transform a string to camelCase

Using `Strings::toCamelCase("my-string")` (*will return: `myString`*).

Example:

```php

echo Strings::toCamelCase('test-to-camel-case');
// will display: testToCamelCase

```

## Want to contribute?

Just fork, commit and open a pull-request. Or just open an issue here:
https://github.com/ludovicm67/php-strings/issues .
