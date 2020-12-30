<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\MatchExpressions;

use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubService;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubServiceA;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubServiceB;
use LeoVie\TryPHP8\FeatureImprovements\MatchExpressions\SubService\SubServiceC;

class ServiceOld
{
    public function decide(string $a): int
    {
        switch ($a) {
            case 'a':
                $decision = 1;
                break;
            case 'b':
                $decision = 10;
                break;
            case 'c':
            case 'd':
                $decision = 100;
                break;
            default:
                $decision = 0;
                break;
        }

        return $decision;
    }

    public function getSubService(string $serviceType): SubService
    {
        switch ($serviceType) {
            case 'a':
                return new SubServiceA();
            case 'b':
                return new SubServiceB();
            case 'c':
                return new SubServiceC();
            default:
                throw new \Exception("No service exists for serviceType '$serviceType'");
        }
    }
}