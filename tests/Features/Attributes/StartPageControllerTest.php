<?php

namespace LeoVie\TryPHP8\Tests\Features\Attributes;

use LeoVie\TryPHP8\Features\Attributes\Attributes\Cacheable;
use LeoVie\TryPHP8\Features\Attributes\Attributes\Route;
use LeoVie\TryPHP8\Features\Attributes\StartPageController;
use PHPUnit\Framework\TestCase;

class StartPageControllerTest extends TestCase
{
    public function testControllerIsNotCacheable(): void
    {
        $reflector = new \ReflectionClass(StartPageController::class);

        self::assertEmpty($reflector->getAttributes(Cacheable::class));
    }

    public function testRoute(): void
    {
        $reflector = new \ReflectionMethod(StartPageController::class, 'page');

        /** @var Route $route */
        $route = $reflector->getAttributes(Route::class)[0]->newInstance();

        self::assertSame('/', $route->getUrl());
    }
}