<?php

namespace Lkt\ValueObjects\Types;

final class RequiredBooleanValue
{
    private $value = false;

    /**
     * @param bool $value
     */
    public function __construct(bool $value)
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