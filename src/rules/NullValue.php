<?php

namespace rock\validate\rules;


class NullValue extends Rule
{
    public $skipEmpty = false;
    /**
     * @inheritdoc
     */
    public function validate($input)
    {
        return is_null($input);
    }
} 