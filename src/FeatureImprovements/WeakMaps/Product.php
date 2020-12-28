<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\WeakMaps;

class Product
{
    public function __construct(private int $id) {}

    public function getId(): int
    {
        return $this->id;
    }
}