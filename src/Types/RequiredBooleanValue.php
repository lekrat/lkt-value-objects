<?php

namespace Lkt\ValueObjects\Types;

final class RequiredBooleanValue
{
    private bool $value = false;

    public function __construct(bool $value)
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