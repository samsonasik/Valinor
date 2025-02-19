<?php

declare(strict_types=1);

namespace CuyZ\Valinor\Mapper\Object\Factory;

use CuyZ\Valinor\Definition\ClassDefinition;
use CuyZ\Valinor\Mapper\Object\ObjectBuilder;
use CuyZ\Valinor\Mapper\Object\ReflectionObjectBuilder;

/** @internal */
final class ReflectionObjectBuilderFactory implements ObjectBuilderFactory
{
    public function for(ClassDefinition $class, $source): ObjectBuilder
    {
        return new ReflectionObjectBuilder($class);
    }
}
