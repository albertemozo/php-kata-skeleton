<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class GreenBarShould extends TestCase
{
    /**
     * @test
     */
    public function beGreen(): void
    {
        $this->assertTrue(true);
    }
}
