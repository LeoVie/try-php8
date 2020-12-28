<?php

declare(strict_types=1);

namespace LeoVie\TryPHP8\Features\Attributes;

use LeoVie\TryPHP8\Features\Attributes\Attributes\Route;

class StartPageController
{
    #[Route('/')]
    public function page(): string
    {
        return (string) rand(1, 1000);
    }
}