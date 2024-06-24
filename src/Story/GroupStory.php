<?php

namespace App\Story;

use App\Entity\Group;
use App\Factory\GroupFactory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Story;

/**
 * @method static Proxy<Group> admin()
 */
final class GroupStory extends Story
{
    public function build(): void
    {
        $adminGroup = GroupFactory::createOne([
            'name' => 'admin'
        ]);

        $this->addState('admin', $adminGroup);
    }
}
