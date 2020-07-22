<?php


use PHPUnit\Framework\TestCase;

class SayHelloArgumentWrapperTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($input)
    {
        $this->expectException(InvalidArgumentException::class);

        sayHelloArgumentWrapper($input);
    }

    public function positiveDataProvider()
    {
        return [
            [null],
            [[1,2,3]],
            [['sdsda','fdsfsf']]
        ];
    }
}