<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class GreenBarShould extends TestCase
{
    #[Test]
    public function beGreen(): void
    {
        $this->assertTrue(true);
    }
}
