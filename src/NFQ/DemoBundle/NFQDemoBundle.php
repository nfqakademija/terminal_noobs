<?php

namespace NFQ\DemoBundle;

use NFQ\DemoBundle\DependencyInjection\Compiler\CarPartsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class NFQDemoBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new CarPartsPass());
    }
}
