<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li><a href="#">Documentation</a></li>
        <li>Setup</li>
        <li class="active">Configuration</li>
    </ol>

    <h1>
        Configuration
    </h1>


    <p>
        All of the configuration files for the Tomahawk framework are stored in the config directory.
        This can be found in <code>app/config</code>.
    </p

    <p>Each config file is documented with the options that are available to you.</p>


    <h2>Environment Configuration</h2>

    <p>You can setup different configuration files per environment. All you need to do is create a new directory in the <code>app/config</code> folder.</p>

    <p>For example if you wanted to created a set of <code>dev</code> environment config files, just create the
    following older <code>app/config/dev</code> and copy any files out of the main directory into that one.</p>

    <p>
        For more information about the environments available to you,
        please see the <a href="<?php echo $view['url']->route('docs.setup.environments', array('fw_version' => $fw_version)) ?>" class="links">Environments</a> section.
    </p>


<?php $view['blocks']->stop() ?>