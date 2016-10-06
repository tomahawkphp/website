<?php

namespace TomahawkPHP\Bundle\WebBundle\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tomahawk\Console\ContainerAwareCommand;
use Symfony\Component\Routing\RouteCollection;

class CompileRoutesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('routing:compile')
            ->setDescription('Compile Routes');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var RouteCollection $routeCollection */
        $routeCollection = $this->container->get('route_collection');
        $kernel = $this->container->get('kernel');

        foreach ($routeCollection->all() as $name => $route) {
            $compile = $route->compile();

            var_dump($name, $compile->getRegex());
            exit;
        }


    }
}