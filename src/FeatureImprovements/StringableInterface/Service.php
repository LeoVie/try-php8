<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\StringableInterface;

use Stringable;

class Service
{
    public function showMessage(string|Stringable $message): string
    {
        return 'Message: ' . $message;
    }
}