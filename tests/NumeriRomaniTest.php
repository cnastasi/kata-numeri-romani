<?php
declare(strict_types=1);

namespace Kata\NumeriRomani;

use PHPUnit\Framework\TestCase;

class NumeriRomaniTest extends TestCase
{
    /**
     * @test
     * @dataProvider  dataProvider
     */
    public function shouldConvertADecimalToRomanic(int $decimal, string $expectedValue)
    {
        $converter = new DecimalToRomanicCoverter();

        $value = $converter->convert($decimal);

        self::assertEquals($expectedValue, $value);
    }

    public function dataProvider()
    {
        yield [1, 'I'];
        yield [2, 'II'];
        yield [3, 'III'];
        yield [4, 'IV'];
        yield [5, 'V'];
        yield [6, 'VI'];
        yield [7, 'VII'];
        yield [8, 'VIII'];
        yield [9, 'IX'];
        yield [10, 'X'];
        yield [11, 'XI'];
        yield [20, 'XX'];
        yield [30, 'XXX'];
        yield [40, 'XL'];
        yield [60, 'LX'];
        yield [90, 'XC'];
        yield [100, 'C'];
        yield [400, 'CD'];
        yield [490, 'CDXC'];
        yield [500, 'D'];
        yield [900, 'CM'];
        yield [1000, 'M'];
        yield [2020, 'MMXX'];
        yield [1982, 'MCMLXXXII'];
    }
}
