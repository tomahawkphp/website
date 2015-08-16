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

class OptimizeCommand extends Command implements ContainerAwareInterface
{
    protected $container;

    protected function configure()
    {
        $this
            ->setName('optimize')
            ->setDescription('Optimize TomahawkPHP');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $kernel = $this->container->get('kernel');

        $preloader = new ClassPreloader(new PrettyPrinter(), new Parser(new Lexer()), $this->getTraverser());

        $handle = $preloader->prepareOutput(__DIR__ .'/../Resources/compiled.php');


        foreach ($this->getClassFiles() as $file) {
            try {
                fwrite($handle, $preloader->getCode($file, false)."\n");
            } catch (SkipFileException $ex) {
                //
            }
        }
        fclose($handle);
    }

    protected function getClassFiles()
    {
        return array(
            __DIR__ .'/CompileConfigCommand.php',
            __DIR__ .'/OptimizeCommand.php',
            __DIR__ .'/ClearCacheCommand.php',
        );
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

    /**
     * Get the node traverser used by the command.
     *
     * @return \ClassPreloader\Parser\NodeTraverser
     */
    protected function getTraverser()
    {
        $traverser = new NodeTraverser();
        $traverser->addVisitor(new DirVisitor(true));
        $traverser->addVisitor(new FileVisitor(true));
        return $traverser;
    }

}