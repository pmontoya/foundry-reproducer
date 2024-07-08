<?php

declare(strict_types=1);


namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Zenstruck\Foundry\Test\Factories;
use Zenstruck\Foundry\Test\ResetDatabase;
use function Zenstruck\Foundry\Persistence\flush_after;

class FakeTest extends KernelTestCase
{
    use ResetDatabase;
    use Factories;

    public function testLoad(): void
    {
        flush_after(FakeStory::load(...));

        static::assertNotNull(FakeStory::firstAdmin()->getName());
    }
}