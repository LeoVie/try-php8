<?php

namespace LeoVie\TryPHP8\Tests\FeatureImprovements\StringableInterface;

use LeoVie\TryPHP8\FeatureImprovements\StringableInterface\Service;
use LeoVie\TryPHP8\FeatureImprovements\StringableInterface\StringableClass;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testShowMessageWithString(): void
    {
        $service = new Service();

        self::assertSame('Message: bla', $service->showMessage('bla'));
    }

    public function testShowMessageWithStringable(): void
    {
        $service = new Service();

        self::assertSame('Message: 123', $service->showMessage(new StringableClass(123)));
    }
}