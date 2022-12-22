<?php

namespace Lkt\ValueObjects\Types;

final class OptionalStringValue
{
    private string $value;

    public function __construct($value = '')
    {
        if (!$value) {
            $value = '';
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}