<?php

namespace NFQ\DemoBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class CarPartsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('app')) {
            return;
        }

        $definition = $container->findDefinition('app.car');

        $taggedServices = $container->findTaggedServiceIds('app.car.parts');

        foreach ($taggedServices as $id => $tags) {
            $definition->addMethodCall('addPart', array(new Reference($id)));
        }
    }
}