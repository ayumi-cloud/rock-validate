<?php

namespace rock\validate\locale\en;


use rock\validate\locale\Locale;

class Float extends Locale
{
    public function defaultTemplates()
    {
        return [
            self::MODE_DEFAULT => [
                self::STANDARD => '{{name}} must be a float number',
            ],
            self::MODE_NEGATIVE => array(
                self::STANDARD => '{{name}} must not be a float number',
            )
        ];
    }
}