<?php

namespace TomahawkPHP\Bundle\WebBundle\Command;

use PhpParser\Lexer;
use PhpParser\Parser;
use ClassPreloader\ClassPreloader;
use ClassPreloader\Parser\DirVisitor;
use ClassPreloader\Parser\FileVisitor;
use ClassPreloader\Parser\NodeTraverser;
use ClassPreloader\Exceptions\SkipFileException;
use PhpParser\PrettyPrinter\Standard as PrettyPrinter;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tomahawk\DI\ContainerAwareInterface;
use Tomahawk\DI\ContainerInterface;
use Symfony\Component\Routing\RouteCollection;

class TestCommand extends Command implements ContainerAwareInterface
{
    protected $container;

    protected function configure()
    {
        $this
            ->setName('test:thing')
            ->setDescription('Compile Routes');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

        //$t = 1 / 0;
        throw new \InvalidArgumentException('yeah baby');


    }

    /**
     * Sets the Container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

}