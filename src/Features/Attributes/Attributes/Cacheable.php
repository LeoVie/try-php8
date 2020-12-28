<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\Features\Attributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class Cacheable
{

}