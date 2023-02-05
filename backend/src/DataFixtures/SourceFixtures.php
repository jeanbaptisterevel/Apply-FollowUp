<?php

namespace App\DataFixtures;

use App\DataFixtures\Abstr\ConFixture;
use App\Entity\Source;
use App\Utils\LinkUtils;

class SourceFixtures extends ConFixture
{

    protected function loadFakeData(): void
    {
        $this->createMany(Source::class, 10, function (Source $source) {
            $sourceName = $this->faker->unique()->getSource();

            $source
                ->setName($sourceName)
                ->setLink(
                    LinkUtils::linkify($sourceName) .
                    ".com/" .
                    strtolower($this->faker->countryCode()) .
                    "/" .
                    $this->faker->md5()
                );
        });
    }
}