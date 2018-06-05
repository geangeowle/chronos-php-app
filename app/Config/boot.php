<?php

use Chronos\Chronos;
use Chronos\Utils\Configure;

Configure::write('App.Namespace', 'App');
Configure::write('App.RenderEngine', 'Default');
Configure::write('App.Path', dirname(dirname(__DIR__)).'/app');
Configure::write('App.View.Folder', Chronos::CAMELCASE);
Configure::write('App.View.File', Chronos::UNDERSCORE);
Configure::write('App.Database', '/Config/ConfigDatabases.php');
