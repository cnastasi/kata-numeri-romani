<?php
declare(strict_types=1);


namespace Kata\NumeriRomani;


class DecimalToRomanicCoverter
{
    private const ROMANICS = [1000 => 'M', 900 => 'CM', 500 => 'D', 400=> 'CD', 100 => 'C', 90 => 'XC', 50 => 'L', 40 => 'XL', 10 => 'X', 9 => 'IX', 5 => 'V', 4 => 'IV', 1 => 'I'];

    public function convert(int $value)
    {
        foreach (self::ROMANICS as $decimal => $romanic) {
            if ($value >= $decimal) {
                return $romanic . $this->convert($value - $decimal);
            }
        }

        return '';
    }
}
