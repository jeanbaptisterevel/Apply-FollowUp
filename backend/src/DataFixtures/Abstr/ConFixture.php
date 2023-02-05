<?php

namespace App\DataFixtures\Abstr;

use App\DataFixtures\Providers\DataProvider;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

abstract class ConFixture extends Fixture
{

    protected $faker;
    protected $manager;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
        $this->faker->addProvider(new DataProvider());
    }

    public function load(ObjectManager $manager): void
    {
        $this->manager = $manager;

        $this->loadFakeData();
    }

    protected function createMany(string $fqcn, int $count, callable $factory)
    {
        for ($i = 0; $i < $count; $i++) {
            $entity = new $fqcn();
            $factory($entity, $i);
            $this->manager->persist($entity);
        }
        $this->manager->flush();
    }

    abstract protected function loadFakeData(): void;
}