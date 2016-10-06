<?php

namespace TomahawkPHP\Bundle\WebBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tomahawk\Console\ContainerAwareCommand;
use Symfony\Component\Console\Style\SymfonyStyle;

class ApplicationUpCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('application:up')
            ->setDescription('Takes application out of maintenance mode');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $symfonyStyle = new SymfonyStyle($input, $output);

        $file = $this->container->get('kernel')->getRootDir() . '/../maintenance';

        if (file_exists($file)) {
            unlink($file);
        }

        $symfonyStyle->success('Application is out of maintenance mode');
    }

}