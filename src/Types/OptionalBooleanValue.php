<?php

namespace Lkt\ValueObjects\Types;

final class OptionalBooleanValue
{
    private bool $value = false;

    public function __construct($value)
    {
        if (!$value) {
            $value = false;
        }
        $this->value = $value === true;
    }

    public function getValue(): bool
    {
        return $this->value;
    }
}