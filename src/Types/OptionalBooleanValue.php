<?php

namespace Lkt\ValueObjects\Types;

final class OptionalBooleanValue
{
    private $value = false;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        if (!$value) {
            $value = false;
        }
        $this->value = $value === true;
    }

    /**
     * @return bool
     */
    public function getValue(): bool
    {
        return $this->value;
    }
}