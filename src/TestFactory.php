<?php

namespace DummyEntity;

use InvalidArgumentException;
use ReflectionClass;

abstract class TestFactory
{
    abstract public static function create(array $values = null);

    public static function createArray(int $n = 1)
    {
        $array = [];
        for ($i = $n; $i > 0; $i--) {
            $array[] = (new static())::create();
        }
        return $array;
    }

    protected static function createFromClass($class, $parameters, array $parametersToOverride = null)
    {
        self::checkFactoryParameters($class, $parameters);

        if ($parametersToOverride !== null) {
            $parameters = self::overrideParameters(
                self::getParametersFromConstructor($class),
                $parameters,
                $parametersToOverride
            );
        }
        return self::createNewClass($class, $parameters);
    }

    private static function createNewClass($class, $parameters)
    {
        return new $class(...$parameters);
    }

    private static function getParametersFromConstructor($class)
    {
        $reflection = new ReflectionClass($class);
        $params = [];
        foreach ($reflection->getConstructor()->getParameters() as $param) {
            $params[] = $param->getName();
        }
        return $params;
    }

    private static function overrideParameters($parametersFromConstructor, $parameters, $parametersToOverride)
    {
        foreach ($parametersToOverride as $name => $value) {
            $index = array_search($name, $parametersFromConstructor, true);
            if ($index === false) {
                throw new InvalidArgumentException('Argument ' . $name . ' is not valid');
            }
            $parameters[$index] = $value;
        }
        return $parameters;
    }

    private static function checkFactoryParameters($class, $parameters)
    {
        $parametersFromConstructor = self::getParametersFromConstructor($class);

        if (count($parametersFromConstructor) !== count($parameters)) {
            throw new InvalidArgumentException('Parameters mismatch');
        }
    }
}