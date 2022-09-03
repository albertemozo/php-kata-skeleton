<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class TestingFrameworkTest extends TestCase
{
    /**
     * @test
     */
    public function shouldWork(): void
    {
        $this->assertTrue(true);
    }
}
