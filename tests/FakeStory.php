<?php

declare(strict_types=1);


namespace App\Tests;

use App\Entity\User;
use App\Factory\UserFactory;
use App\Story\GroupStory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Story;

/**
 * @method static Proxy<User> firstAdmin()
 */
class FakeStory extends Story
{
    public function build(): void
    {
        $firstAdmin = UserFactory::createOne([
            'link' => GroupStory::admin(),
        ]);

        $this->addState('firstAdmin', $firstAdmin);
    }
}