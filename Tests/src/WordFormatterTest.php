<?php

namespace WordWrapHelper\Tests;

use WordWrapHelper\WordFormatter;

class WordFormatterTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function wrapTest()
    {
        $wordFormatter = new WordFormatter();
        
        $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        
        $actualResult = $wordFormatter->wrap($content, 30, '-<br/>');
        
        $expectedResult = "Lorem Ipsum is simply dummy-<br/>text of the printing and-<br/>typesetting industry. Lorem-<br/>Ipsum has been the industry's-<br/>standard dummy text ever since-<br/>the 1500s, when an unknown-<br/>printer took a galley of type-<br/>and scrambled it to make a-<br/>type specimen book.";
        
        $this->assertEquals($expectedResult, $actualResult);
    }
}
