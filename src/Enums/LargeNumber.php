<?php
namespace Riskihajar\Terbilang\Enums;

enum LargeNumber: string
{
    case Kilo = 'kilo';
    case Million = 'million';
    case Billion = 'billion';
    case Trilion = 'trilion';
    case Quadrillion = 'quadrillion';

    public function divider(): int
    {
        return match($this){
            self::Kilo => 10**3,
            self::Million => 10**6,
            self::Billion => 10**9,
            self::Trilion => 10**12,
            self::Quadrillion => 10**15,
        };
    }

    public function abbreviation(): string
    {
        return match($this){
            self::Kilo => 'k',
            self::Million => 'm',
            self::Billion => 'b',
            self::Trilion => 't',
            self::Quadrillion => 'q',
        };
    }
}