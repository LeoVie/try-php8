<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\MatchExpressions;

use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubService;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubServiceA;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubServiceB;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubServiceC;

class ServiceNew
{
    public function decide(string $a): int
    {
        return match ($a) {
            'a' => 1,
            'b' => 10,
            'c', 'd' => 100,
            default => 0
        };
    }

    public function getSubService(string $serviceType): SubService
    {
        return match ($serviceType) {
            'a' => new SubServiceA(),
            'b' => new SubServiceB(),
            'c' => new SubServiceC(),
            'default' => throw new \Exception("No service exists for serviceType '$serviceType'")
        };
    }
}