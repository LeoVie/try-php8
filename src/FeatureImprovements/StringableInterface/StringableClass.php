<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\StringableInterface;

class StringableClass
{
    public function __construct(private int $value) {}

    public function __toString(): string
    {
        return (string) $this->value;
    }
}