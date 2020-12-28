<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\ThrowExpressions;

class ServiceOld
{
    private string $value;

    public function assignOrThrow(?string $value): void
    {
        if ($value === null) {
            throw new \Exception('Not allowed to pass null here.');
        }

        $this->value = $value;
    }
}