<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class BarShould extends TestCase
{
    #[Test]
    public function beGreen(): void
    {
        $this->assertTrue(true);
    }

    #[Test]
    public function beRed(): void
    {
        $this->assertTrue(false);
    }
}
