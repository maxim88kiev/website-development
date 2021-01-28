#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';
require dirname(__DIR__).'/bitrix/modules/main/cli/bootstrap.php';

use Symfony\Component\Console\Application;
use App\Command\UpdateArticlesCountCommentsCommand;

$application = new Application();

$application->add(new UpdateArticlesCountCommentsCommand());

$application->run();