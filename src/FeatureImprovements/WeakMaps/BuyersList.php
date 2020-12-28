<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\FeatureImprovements\WeakMaps;

use WeakMap;

class BuyersList
{
    public WeakMap $cache;

    public function __construct()
    {
        $this->cache = new WeakMap();
    }

    public function getBuyers(Product $product): string
    {
        return $this->cache[$product] ??= $this->findBuyers($product);
    }

    private function findBuyers(Product $product): string
    {
        return match ($product->getId()) {
            1 => 'buyer1,buyer2',
            2 => 'buyer8,buyer9',
            default => '',
        };
    }
}