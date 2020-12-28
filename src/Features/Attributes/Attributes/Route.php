<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\Features\Attributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Route
{
    public function __construct(private string $url)
    {}

    public function getUrl(): string
    {
        return $this->url;
    }
}