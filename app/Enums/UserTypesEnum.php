<?php

namespace App\Enums;

abstract class UserTypesEnum
{
    public const EMPLOYER = 'EMPLOYER';
    public const CANDIDATE = 'CANDIDATE';

    public static array $TITLES = [
        self::EMPLOYER => 'Работадатель',
        self::CANDIDATE => 'Стажер'
    ];

    public static function getTitle(string $userType): string
    {
        return self::$TITLES[$userType];
    }
}
