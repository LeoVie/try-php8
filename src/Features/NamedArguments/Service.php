<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\Features\NamedArguments;

use Closure;

class Service
{
    public function takeEveryNthFromArray(array $array, int $n = 2, Closure $filter = null): array
    {
        if ($filter === null) {
            $filter = fn($x) => true;
        }

        $newArray = [];
        foreach ($array as $i => $item) {
            if (($i + 1) % $n === 0) {
                if ($filter($item)) {
                    $newArray[] = $item;
                }
            }
        }

        return $newArray;
    }
}