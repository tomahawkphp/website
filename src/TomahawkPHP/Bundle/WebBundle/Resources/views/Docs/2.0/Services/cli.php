<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li>
            <a href="<?php echo $view['url']->route('docs.home') ?>">Documentation</a>
        </li>
        <li class="active">Hatchet CLI</li>
    </ol>

    <h1>
        Hatchet CLI
    </h1>

    <p>
        The Hatchet Command Line Interface is build around the Symfony3 Console Component. You can read more about it
        <a class="links" href="http://symfony.com/doc/current/services/console/introduction.html" target="_blank">here</a>
        including how to create a command.
    </p>


    <h3>
        Using the CLI
    </h3>

    <p>
        Make sure you've changed to the directory of the project in Terminal/Command Prompt.
    </p>

    <p>
        You can run the following to see what commands are available:
    </p>

<pre>
<code>app/hatchet</code>
</pre>

    <h3>
        Writing your own commands
    </h3>

    <p>
        This sections assumes you already have a Bundle created. To learn more about Bundles click
        <a class="links" href="<?php echo $view['url']->route('docs.services.bundles') ?>" target="_blank">here</a>.
    </p>

    <p>
        All commands must follow the following rules:
    </p>

    <ul>
        <li>The class name must end with <code>Command.php</code></li>
        <li>All commands must be in a <code>Command</code> folder within your Bundle</li>
    </ul>

    <p>
        Below is an example of a command:
    </p>

<div>
<script data-style="application/x-httpd-php" type="x-code-example">&lt;?php

namespace MyCompany\MyBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MyCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('Say Hello.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello');
    }

}
</script>
</div>


    <p>
        You can run the above command by running the following:
    </p>

<pre>
<code>app/hatchet hello</code>
</pre>


    <h3>
        Using the Dependency Injection Container in a command
    </h3>

    <p>
        If you have your command implement <code>Tomahawk\DependencyInjection\ContainerAwareInterface</code> or use the
        <code>Tomahawk\DependencyInjection\ContainerAwareTrait</code> it will get passed in for you.
    </p>
    <p>
        You will they have access to it through <code>$this->container</code>.
    </p>

<div class="push-down-20"></div>

<?php $view['blocks']->stop() ?>