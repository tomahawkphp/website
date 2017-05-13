<?php $view->extend('WebBundle::layout2') ?>

<?php $view['blocks']->start('content') ?>

    <ol class="breadcrumb">
        <li><a href="#">Documentation</a></li>
        <li>Setup</li>
        <li class="active">Server Configuration</li>
    </ol>

    <h1>
        Server Configuration
    </h1>


    <p>
        This page describes several ways you can setup a web server to run TomahawkPHP. Some of the information has
        been taken from the Symfony docs.
    </p>

    <p>
        When using Apache as your web server, you can configure PHP as an Apache module. or with FastCGI using PHP-FPM.
        FastCGI also is the preferred way to use PHP with Nginx.
    </p>

    <h2>Apache</h2>

    <h3>Apache with mod_php/PHP-CGI</h3>

    <p>The minimum configuration to get your application running under Apache is:</p>

<div style="line-height: 21px">
<script data-style="http" type="x-code-example">
&lt;VirtualHost *:80&gt;
    ServerName mywebsite.com
    ServerAlias www.mywebsite.com

    DocumentRoot /var/www/vhosts/mywebsite.com/web
    <Directory /var/www/vhosts/mywebsite.com/web>
        # enable the .htaccess rewrites
        AllowOverride All
        Order Allow,Deny
        Allow from All
    </Directory>

    # uncomment the following lines if you install assets as symlinks
    # or run into problems when compiling LESS/Sass/CoffeeScript assets
    # <Directory /var/www/vhosts/mywebsite.com>
    #     Options FollowSymlinks
    # </Directory>

    ErrorLog /var/log/apache2/project_error.log
    CustomLog /var/log/apache2/project_access.log combined
&lt;/VirtualHost&gt;

</script>
</div>

<!--    <p>As Tomahawk ships with an <code>.htaccess</code> file. You may wish to setup so <code>.htaccess</code> is disabled</p>

<div style="line-height: 21px">
<script data-style="http" type="x-code-example">
&lt;VirtualHost *:80&gt;
    ServerName mywebsite.com
    ServerAlias www.mywebsite.com

    DocumentRoot /var/www/vhosts/mywebsite.com/web
    <Directory /var/www/vhosts/mywebsite.com/web>
        AllowOverride None
        Order Allow,Deny
        Allow from All

        <IfModule mod_rewrite.c>
            Options -MultiViews
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^(.*)$ app.php [QSA,L]
        </IfModule>

    </Directory>

    # uncomment the following lines if you install assets as symlinks
    # or run into problems when compiling LESS/Sass/CoffeeScript assets
    # <Directory /var/www/vhosts/mywebsite.com>
    #     Options FollowSymlinks
    # </Directory>

    ErrorLog /var/log/apache2/project_error.log
    CustomLog /var/log/apache2/project_access.log combined
&lt;/VirtualHost&gt;

</script>
</div>-->

    <h2>Nginx</h2>

    <h3>Nginx with PHP-FPM</h3>

    <p>The minimum configuration to get your application running under Nginx is:</p>

<div style="line-height: 21px">
<script data-style="nginx" type="x-code-example">
server {
    server_name mywebsite.com www.mywebsite.com;
    root /var/www/vhosts/mywebsite.com/web;

    location / {
        # try to serve file directly, fallback to app.php
        try_files $uri /app.php$is_args$args;
    }

    # DEV
    # This rule should only be placed on your development environment
    # In production, don't include this and don't deploy app_dev.php or config.php
    location ~ ^/app_dev\.php(/|$) {
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        # When you are using symlinks to link the document root to the
        # current version of your application, you should pass the real
        # application path instead of the path to the symlink to PHP
        # FPM.
        # Otherwise, PHP's OPcache may not properly detect changes to
        # your PHP files (see https://github.com/zendtech/ZendOptimizerPlus/issues/126
        # for more information).
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
    }

    # PROD
    location ~ ^/app\.php(/|$) {
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        # When you are using symlinks to link the document root to the
        # current version of your application, you should pass the real
        # application path instead of the path to the symlink to PHP
        # FPM.
        # Otherwise, PHP's OPcache may not properly detect changes to
        # your PHP files (see https://github.com/zendtech/ZendOptimizerPlus/issues/126
        # for more information).
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        # Prevents URIs that include the front controller. This will 404:
        # http://domain.tld/app.php/some-path
        # Remove the internal directive to allow URIs like this
        internal;
    }

    # return 404 for all other php files not matching the front controller
    # this prevents access to other php files you don't want to be accessible.
    location ~ \.php$ {
      return 404;
    }

    error_log /var/log/nginx/project_error.log;
    access_log /var/log/nginx/project_access.log;
}

</script>
</div>

    <div class="alert alert-info">
        <i class="fa fa-info-circle"></i> Depending on how you've setup PHP-FPM, the fastcgi_pass can also be fastcgi_pass 127.0.0.1:9000.
    </div>

<?php $view['blocks']->stop() ?>