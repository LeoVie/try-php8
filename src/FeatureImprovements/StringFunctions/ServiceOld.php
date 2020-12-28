<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\StringFunctions;

class ServiceOld
{
    public function startsWith(string $haystack, string $needle): bool
    {
        return strpos($haystack, $needle) === 0;
    }

    public function endsWith(string $haystack, string $needle): bool
    {
        return strpos($haystack, $needle) === (strlen($haystack) - strlen($needle));
    }

    public function contains(string $haystack, string $needle): bool
    {
        return strpos($haystack, $needle) !== false;
    }
}