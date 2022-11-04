<?php

namespace Lkt\ValueObjects\Types;

final class OptionalStringValue
{
    private $value;

    /**
     * @param $value
     */
    public function __construct($value = '')
    {
        if (!$value) {
            $value = '';
        }
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}