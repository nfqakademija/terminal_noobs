<?php

namespace NFQ\DemoBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ShoePartPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has('app')) {
            return;
        }

        $definition = $container->findDefinition('app.shoe');

        $taggedServices = $container->findTaggedServiceIds('app.shoe.parts');
        foreach ($taggedServices as $id => $tags) {
            $definition->addMethodCall('addPart', array(new Reference($id)));
        }
    }
}