<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum MonthsOfYear: int implements HasLabel
{
    case January = 1;
    case February = 2;
    case March = 3;
    case April = 4;
    case May = 5;
    case June = 6;
    case July = 7;
    case August = 8;
    case September = 9;
    case October = 10;
    case November = 11;
    case December = 12;

    public function getLabel(): ?string
    {
        // return match($this) {
        //     self::January => 'January',
        //     self::February => 'February',
        //     self::March => 'March',
        //     self::April => 'April',
        //     self::May => 'May',
        //     self::June => 'June',
        //     self::July => 'July',
        //     self::August => 'August',
        //     self::September => 'September',
        //     self::October => 'October',
        //     self::November => 'November',
        //     self::December => 'December'
        // };
        return $this->name;
    }
}
