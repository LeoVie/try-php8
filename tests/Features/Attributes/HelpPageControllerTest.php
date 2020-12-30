<?php

namespace LeoVie\TryPHP8\Tests\Features\Attributes;

use LeoVie\TryPHP8\Features\Attributes\Attributes\Cacheable;
use LeoVie\TryPHP8\Features\Attributes\Attributes\Route;
use LeoVie\TryPHP8\Features\Attributes\HelpPageController;
use PHPUnit\Framework\TestCase;

class HelpPageControllerTest extends TestCase
{
    public function testControllerIsCacheable(): void
    {
        $reflector = new \ReflectionClass(HelpPageController::class);

        self::assertNotEmpty($reflector->getAttributes(Cacheable::class));
    }

    public function testRoute(): void
    {
        $reflector = new \ReflectionMethod(HelpPageController::class, 'page');

        /** @var Route $route */
        $route = $reflector->getAttributes(Route::class)[0]->newInstance();

        self::assertSame('/help', $route->getUrl());
    }
}