<?php

declare(strict_types=1);

namespace DummyEntity\Test\Factories;

use DummyEntity\Test\Entities\B;
use DummyEntity\TestFactory;
use Faker\Factory;

class BTestFactory extends TestFactory
{
    public static function create(array $values = null): B
    {
        $class = B::class;

        $faker = Factory::create();
        $constructor = [
            $faker->randomNumber(),
            $faker->optional()->name,
            $faker->dateTime,
        ];

        return parent::createFromClass($class, $constructor, $values);
    }
}
