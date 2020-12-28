<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\Features\Attributes;

use LeoVie\TryPHP8\Features\Attributes\Attributes\Cacheable;
use LeoVie\TryPHP8\Features\Attributes\Attributes\Route;

#[Cacheable]
class HelpPageController
{
    #[Route('/help')]
    public function page(): string
    {
        return 'help';
    }
}