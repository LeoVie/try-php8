<?php

namespace LeoVie\TryPHP8\Tests\Features\NamedArguments;

use LeoVie\TryPHP8\Features\NamedArguments\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testTakeEveryNthFromArrayWorksWithoutAndWithNamedArguments(): void
    {
        $array = [1, 2, 3, 4, 5, 6];
        $filterFunction = fn($x) => ($x > 2);
        $expected = [4, 6];

        $service = new Service();

        $withoutNamedArguments = $service->takeEveryNthFromArray($array, 2, $filterFunction);
        $withNamedArguments = $service->takeEveryNthFromArray(array: $array, filter: fn($x) => ($x > 2));

        self::assertSame($expected, $withoutNamedArguments);
        self::assertSame($expected, $withNamedArguments);

        // Also allowed
        $withNamedArguments = $service->takeEveryNthFromArray($array, filter: fn($x) => ($x > 2));
        $withNamedArguments = $service->takeEveryNthFromArray(filter: fn($x) => ($x > 2), array: $array);
        // Not allowed
        // $withNamedArguments = $service->takeEveryNthFromArray(array: $array, 2, fn($x) => ($x > 2));
    }

    public function testTakeEveryNthFromArrayWorksWithVariadic(): void
    {
        $array = [1, 2, 3, 4, 5, 6];
        $filterFunction = fn($x) => ($x > 2);
        $expected = [4, 6];

        $service = new Service();

        $params = ['array' => $array, 'filter' => $filterFunction];

        $actual = $service->takeEveryNthFromArray(...$params);

        self::assertSame($expected, $actual);
    }
}