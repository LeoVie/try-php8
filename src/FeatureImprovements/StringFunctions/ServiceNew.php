<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\StringFunctions;

class ServiceNew
{
    public function startsWith(string $haystack, string $needle): bool
    {
        return str_starts_with(haystack: $haystack, needle: $needle);
    }

    public function endsWith(string $haystack, string $needle): bool
    {
        return str_ends_with(haystack: $haystack, needle: $needle);
    }

    public function contains(string $haystack, string $needle): bool
    {
        return str_contains(haystack: $haystack, needle: $needle);
    }
}