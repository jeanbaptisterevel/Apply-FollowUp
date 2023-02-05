<?php

namespace App\DataFixtures;

use App\DataFixtures\Abstr\ConFixture;
use App\Entity\Post;

class PostFixtures extends ConFixture
{

    protected function loadFakeData(): void
    {
        $this->createMany(Post::class, 3, function (Post $post) {
            $post
                ->setName($this->faker->unique()->getPost());
        });
    }
}