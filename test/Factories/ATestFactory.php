<?php

namespace DummyEntity\Test\Factories;

use DummyEntity\Test\Entities\A;
use DummyEntity\TestFactory;
use Faker\Factory;

class ATestFactory extends TestFactory
{
    public static function create(array $values = null): A
    {
        $class = A::class;

        $faker = Factory::create();
        $constructor = [
            $faker->randomNumber(),
            $faker->name,
            $faker->boolean,
            $faker->dateTime
        ];

        return parent::createFromClass($class, $constructor, $values);
    }
}