<?php


use PHPUnit\Framework\TestCase;

class SayHelloArgumentTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($input,$expected)
    {
        $this->assertEquals($expected,sayHelloArgument($input));
    }

    public function positiveDataProvider()
    {
        return [
            [5,'Hello 5'],
            ['5','Hello 5'],
            ['world','Hello world'],
            [True,'Hello 1'],
        ];
    }
}