<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('flag', [$this, 'countryCodeToFlag']),
        ];
    }

    public function countryCodeToFlag(string $countryCode): string
    {
        $countryCode = strtoupper($countryCode);
        if (strlen($countryCode) !== 2) {
            return '';
        }

        $offset = 0x1F1E6 - ord('A');

        $firstChar = mb_chr(ord($countryCode[0]) + $offset);
        $secondChar = mb_chr(ord($countryCode[1]) + $offset);

        return $firstChar . $secondChar;
    }

}
