<?php

namespace TomahawkPHP\Bundle\WebBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Tomahawk\Console\ContainerAwareCommand;

class ApplicationDownCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('application:down')
            ->setDescription('Puts application into maintenance mode');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $symfonyStyle = new SymfonyStyle($input, $output);

        $symfonyStyle->choice('Do you want to put the application into maintenance mode?', array('n' => 'No', 'y' => 'Yes'), 'No');

        touch($this->container->get('kernel')->getRootDir() . '/../maintenance');

        $symfonyStyle->success('Application is in maintenance mode');
    }

}