<?php

namespace DummyEntity;

use InvalidArgumentException;
use ReflectionClass;

abstract class TestFactory
{
    protected static function createFromClass($class, $parameters, array $parametersToOverride = null)
    {
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
}