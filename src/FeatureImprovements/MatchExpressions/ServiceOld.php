<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\MatchExpressions;

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
}