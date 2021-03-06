<?php

namespace rock\validate\locale\en;


use rock\validate\locale\Locale;

class IntLocale extends Locale
{
    public function defaultTemplates()
    {
        return [
            self::MODE_DEFAULT => [
                self::STANDARD => '{{name}} must be an integer number',
            ],
            self::MODE_NEGATIVE => [
                self::STANDARD => '{{name}} must not be an integer number',
            ]
        ];
    }
}