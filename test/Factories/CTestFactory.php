<?php

namespace DummyEntity\Test\Factories;

use DummyEntity\Test\Entities\C;
use DummyEntity\TestFactory;
use Faker\Factory;

class CTestFactory extends TestFactory
{
    public static function create(array $values = null): C
    {
        $class = C::class;

        $faker = Factory::create();
        $constructor = [
            $faker->randomNumber(),
            $faker->optional()->name
        ];

        return parent::createFromClass($class, $constructor, $values);
    }
}