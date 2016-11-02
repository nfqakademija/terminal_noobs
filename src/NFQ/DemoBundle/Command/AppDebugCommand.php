<?php

namespace NFQ\DemoBundle\Command;

use NFQ\DemoBundle\Service\Shoe;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AppDebugCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:debug');
    }
    private $laces_colour;
    private $laces_length;
    private $laces_diameter;
    private $heel_material;
    private $heel_width;
    private $heel_height;
    private $shoe_colour;
    private $shoe_material;
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $shoe = $this->getContainer()->get('app.shoe');
        $output->writeln($shoe->getShoeMaterial());
        $output->writeln($shoe->getShoeColour());
        $output->writeln($shoe->getLacesColour());
        $output->writeln($shoe->getLacesLength());
        $output->writeln($shoe->getLacesDiameter());
        $output->writeln($shoe->getHeelMaterial());
        $output->writeln($shoe->getHeelWidth());
        $output->writeln($shoe->getHeelHeight());


        $output->writeln('Done.');
    }
}
