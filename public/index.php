<?php

    ini_set('display_errors', '1');
    error_reporting(E_ALL);
    date_default_timezone_set('America/Sao_Paulo');

    require_once dirname(__DIR__).'/vendor/autoload.php';

    use Chronos\Chronos;
    use Chronos\Utils\Configure;

    Configure::write('Default.Namespace', 'App');
    Configure::write('Default.Path', 'app');
    Configure::write('Default.NamespaceAllow', []);

    (new Chronos())->run();