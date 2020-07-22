<?php


use PHPUnit\Framework\TestCase;

class CountArgumentsWrapperTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive(...$input)
    {
        $this->expectException(InvalidArgumentException::class);

        countArgumentsWrapper($input);
    }

    public function positiveDataProvider()
    {
        return [
            [1,2,3],
            ['dfsffs',[1,2,3]],
            [],
        ];
    }
}