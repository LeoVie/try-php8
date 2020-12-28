<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\ThrowExpressions;

class ServiceNew
{
    private string $value;

    public function assignOrThrow(?string $value): void
    {
        $this->value = $value ?? throw new \Exception('Not allowed to pass null here.');
    }
}