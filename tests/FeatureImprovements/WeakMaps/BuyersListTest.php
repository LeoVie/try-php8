<?php

namespace LeoVie\TryPHP8\Tests\FeatureImprovements\UnionTypes;

use LeoVie\TryPHP8\FeatureImprovements\WeakMaps\BuyersList;
use LeoVie\TryPHP8\FeatureImprovements\WeakMaps\Product;
use PHPUnit\Framework\TestCase;

class BuyersListTest extends TestCase
{
    public function testGetBuyers(): void
    {
        $buyersList = new BuyersList();

        $product1 = new Product(1);

        // Comes from findBuyers method
        $buyersProduct1 = $buyersList->getBuyers($product1);
        self::assertSame('buyer1,buyer2', $buyersProduct1);

        self::assertNotEmpty($buyersList->cache);

        // Comes from cache
        $buyersProduct1Again = $buyersList->getBuyers($product1);
        self::assertSame('buyer1,buyer2', $buyersProduct1Again);

        unset($product1);
        // product1 gets removed from cache automatically
        self::assertEmpty($buyersList->cache);
    }
}