<?php

namespace App\Enums;

abstract class QualificationsEnum
{
    public const STUDENT = 'STUDENT';
    public const WITH_EXPERIENCE = 'WITH_EXPERIENCE';

    public static array $TITLES = [
        self::STUDENT => 'Студент',
        self::WITH_EXPERIENCE => 'С опытом'
    ];

    public function getTitle(string $qualification): string
    {
        return self::$TITLES[$qualification];
    }
}
