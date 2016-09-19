# Word Wrap Helper
Wraps a string to a given number of characters using a string break character.

[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/word-wrap-helper.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/word-wrap-helper)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/word-wrap-helper/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/word-wrap-helper/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/word-wrap-helper/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/word-wrap-helper/build-status/master)

## Installation

If you use composer, you can add this package by running 

````
composer require nexuslinkservices/word-wrap-helper
````

## Usage

Use Wrap function in which first parameter content is only require value other 3 are optional. 
Default value for $width is 75, for $break it's '\n' and $cut is default false. 

```
<?php
use WordWrapHelper\WordFormatter;

$wordFormatter = new WordFormatter();
        
$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";

$result = $wordFormatter->wrap($content, 30, '-<br/>');

echo $result;
```

## Output on PHP

```
Lorem Ipsum is simply dummy-<br/>text of the printing and-<br/>typesetting industry.
```

## CONTRIBUTING:

Pull requests are always welcome.