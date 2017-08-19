<?php

namespace DummyEntity\Test;

use DateTime;
use DummyEntity\Test\Entities\A;
use DummyEntity\Test\Factories\ATestFactory;
use DummyEntity\Test\Factories\BTestFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test_givenNoValues_ShouldReturnEntity()
    {
        $entity = ATestFactory::create();

        $this->assertInstanceOf(
            A::class,
            $entity
        );
    }

    public function test_givenValidValue_ShouldReturnValue()
    {
        $name = 'New name';

        $entity = ATestFactory::create(
            [
                'name' => $name
            ]
        );

        $this->assertEquals(
            $name,
            $entity->getName()
        );
    }

    public function test_givenAllValidValues_ShouldReturnEntity()
    {
        $id = 1;
        $name = 'New name';
        $isEnabled = true;
        $createdAt = new DateTime();

        $expected = new A(
            $id,
            $name,
            $isEnabled,
            $createdAt
        );

        $actual = ATestFactory::create(
            [
                'id' => $id,
                'name' => $name,
                'isEnabled' => $isEnabled,
                'createdAt' => $createdAt
            ]
        );

        $this->assertEquals(
            $expected,
            $actual
        );
    }

    public function test_givenInValidValue_ShouldThrowException()
    {
        $this->expectException(InvalidArgumentException::class);

        ATestFactory::create(
            [
                'invalid' => 'argument'
            ]
        );

    }

    public function test_givenValidTypeValue_ShouldReturnEntity()
    {
        $datetime = new DateTime();
        $entity = BTestFactory::create(
            [
                'createdAt' => $datetime
            ]
        );

        $this->assertEquals(
            $datetime,
            $entity->getCreatedAt()
        );
    }

    public function test_givenValidNullValue_ShouldReturnEntity()
    {
        $optional = null;
        $entity = BTestFactory::create(
            [
                'optional' => $optional
            ]
        );

        $this->assertEquals(
            $optional,
            $entity->getOptional()
        );
    }
}