<?php

namespace App\DataFixtures;

use App\DataFixtures\Abstr\ConFixture;
use App\Entity\Apply;
use App\Entity\Post;
use App\Entity\Source;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ApplyFixtures extends ConFixture implements DependentFixtureInterface
{

    protected function loadFakeData(): void
    {
        $posts = $this->manager->getRepository(Post::class)->findAll();
        $source = $this->manager->getRepository(Source::class)->findAll();

        $this->createMany(Apply::class, 10, function (Apply $apply) use ($posts, $source) {

            $apply
                ->setBusinessName($this->faker->unique()->getCompany())
                ->setContactMail($this->faker->unique()->safeEmail())
                ->setContactPhone("06" . $this->faker->unique()->randomNumber(8, true))
                ->setContactLinkedin("linkedin.con/in/" . $this->faker->unique()->userName())
                ->setCategory($this->faker->word())
                ->setPost($posts[array_rand($posts)])
                ->setSource($source[array_rand($source)]);

        });
    }

    public function getDependencies(): array
    {
        return array(
            PostFixtures::class,
            SourceFixtures::class,
        );
    }
}